    <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Estadistica de inventario</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="resultados"><canvas id="grafico"></canvas></div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel" style="height: 296px;">
                  <div class="x_title">
                    <h2>Calendario</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <script>
setCal()

/*function getTime<CENTER>() {
var now = new Date()
var hour = now.getHours()
var minute = now.getMinutes()
now = null
var ampm = ""

if (hour >= 12) {
hour -= 12
ampm = "PM"
} else
ampm = "AM"
hour = (hour == 0) ? 12 : hour

if (minute < 10)
minute = "0" + minute // do not parse this number!

return hour + ":" + minute + " " + ampm
}*/

 function show5(){
        if (!document.layers&&!document.all&&!document.getElementById)
        return

         var Digital=new Date()
         var hours=Digital.getHours()
         var minutes=Digital.getMinutes()
         var seconds=Digital.getSeconds()

        var dn="PM"
        if (hours<12)
        dn="AM"
        if (hours>12)
        hours=hours-12
        if (hours==0)
        hours=12

         if (minutes<=9)
         minutes="0"+minutes
         if (seconds<=9)
         seconds="0"+seconds
        //change font size here to your desire
        myclock="<font size='1' face='Arial'><b>"+hours+":"+minutes+":"
         +seconds+ " " +dn+"</b></font>"
        if (document.layers){
        document.layers.liveclock.document.write(myclock)
        document.layers.liveclock.document.close()
        }
        else if (document.all)
        liveclock.innerHTML=myclock
        else if (document.getElementById)
        document.getElementById("liveclock").innerHTML=myclock
        setTimeout("show5()",1000)
         }


        window.onload=show5


function leapYear(year) {
if (year % 4 == 0) // basic rule
return true // is leap year
return false // is not leap year
}

function getDays(month, year) {
var ar = new Array(12)
ar[0] = 31 // January
ar[1] = (leapYear(year)) ? 29 : 28 // February
ar[2] = 31 // March
ar[3] = 30 // April
ar[4] = 31 // May
ar[5] = 30 // June
ar[6] = 31 // July
ar[7] = 31 // August
ar[8] = 30 // September
ar[9] = 31 // October
ar[10] = 30 // November
ar[11] = 31 // December

return ar[month]
}

function getMonthName(month) {
var ar = new Array(12)
ar[0] = "Enero"
ar[1] = "Febrero"
ar[2] = "Marzo"
ar[3] = "Abril"
ar[4] = "Mayo"
ar[5] = "Junio"
ar[6] = "Julio"
ar[7] = "Agosto"
ar[8] = "Septiembre"
ar[9] = "Octubre"
ar[10] = "Noviembre"
ar[11] = "Deciembre"

return ar[month]
}

function setCal() {
var now = new Date()
var year = now.getYear()
if (year < 1000)
year+=1900
var month = now.getMonth()
var monthName = getMonthName(month)
var date = now.getDate()
now = null

var firstDayInstance = new Date(year, month, 1)
var firstDay = firstDayInstance.getDay()
firstDayInstance = null

var days = getDays(month, year)

drawCal(firstDay + 1, days, date, monthName, year)
}

function drawCal(firstDay, lastDate, date, monthName, year) {
var headerHeight = 50 // height of the table's header cell
var border = 2 // 3D height of table's border
var cellspacing = 4 // width of table's border
var headerColor = "orange" // color of table's header
var headerSize = "+3" // size of tables header font
var colWidth = 30 // width of columns in table
var dayCellHeight = 15 // height of cells containing days of the week
var dayColor = "green" // color of font representing week days
var cellHeight = 20 // height of cells representing dates in the calendar
var todayColor = "orange" // color specifying today's date in the calendar
var timeColor = "green" // color of font representing current time

var text = "" // initialize accumulative variable to empty string
text += '<CENTER>'
text += '<TABLE BORDER=' + border + ' CELLSPACING=' + cellspacing + '>' // table settings
text += '<TH COLSPAN=7 HEIGHT=' + headerHeight + '>' // create table header cell
text += '<FONT COLOR="' + headerColor + '" SIZE=' + headerSize + '>' // set font for table header
text += monthName + ' ' + year
text += '</FONT>' // close table header's font settings
text += '</TH>' // close header cell

var openCol = '<TD WIDTH=' + colWidth + ' HEIGHT=' + dayCellHeight + '>'
openCol += '<FONT COLOR="' + dayColor + '">'
var closeCol = '</FONT></TD>'

var weekDay = new Array(7)
weekDay[0] = "Domingo"
weekDay[1] = "Lunes"
weekDay[2] = "Martes"
weekDay[3] = "Miercoles"
weekDay[4] = "Jueves"
weekDay[5] = "Viernes"
weekDay[6] = "Sabado"

text += '<TR ALIGN="center" VALIGN="center">'
for (var dayNum = 0; dayNum < 7; ++dayNum) {
text += openCol + weekDay[dayNum] + closeCol
}
text += '</TR>'

var digit = 1
var curCell = 1

for (var row = 1; row <= Math.ceil((lastDate + firstDay - 1) / 7); ++row) {
text += '<TR ALIGN="right" VALIGN="top">'
for (var col = 1; col <= 7; ++col) {
if (digit > lastDate)
break
if (curCell < firstDay) {
text += '<TD></TD>';
curCell++
} else {
if (digit == date) { // current cell represent today's date
text += '<TD HEIGHT=' + cellHeight + '>'
text += '<FONT COLOR="' + todayColor + '">'
text += digit
text += '</FONT><BR>'
text += '<FONT COLOR="' + timeColor + '" SIZE=2>'
//text += '<CENTER>' + getTime() + '</CENTER>'
text+='<CENTER><span id="liveclock"></span></CENTER>'
text += '</FONT>'
text += '</TD>'
} else
text += '<TD HEIGHT=' + cellHeight + '>' + digit + '</TD>'
digit++
}
}
text += '</TR>'
}

text += '</TABLE>'
text += '</CENTER>'

document.write(text)
}
</script>


 
                  </div>
                </div>
              </div>
    </div>


<script src="js/jquery.js"></script>

<script src="js/chartJS/Chart.min.js"></script>

<script>
            $(document).ready(mostrarResultados(2015));
                function mostrarResultados(año){

                    $.ajax({
                        type:'POST',
                        url:'../modelo/graficar/procesar_grafica.php',
                        data:'año='+año,
                        success:function(data){



                            var valores = eval(data);



                            var e   = valores[0];
                            var t   = valores[1];
                            var m   = valores[2];
                            var mou   = valores[3];
                            var te  = valores[4];
                            var u   = valores[5];


                            var Datos = {
                                    labels : ['Equipo', 'Torre', 'Monitor', 'Mouse', 'Teclado', 'Usuarios'],
                                    datasets : [
                                        {
                                            fillColor : 'rgba(91,228,146,0.6)', //COLOR DE LAS BARRAS
                                            strokeColor : 'rgba(57,194,112,0.7)', //COLOR DEL BORDE DE LAS BARRAS
                                            highlightFill : 'rgba(73,206,180,0.6)', //COLOR "HOVER" DE LAS BARRAS
                                            highlightStroke : 'rgba(66,196,157,0.7)', //COLOR "HOVER" DEL BORDE DE LAS BARRAS
                                            data : [e, t, m, mou, te, u]
                                        }
                                    ]
                                }

                            var contexto = document.getElementById('grafico').getContext('2d');
                            window.Barra = new Chart(contexto).Bar(Datos, { responsive : true });
                        }
                    });
                    return false;
                }
    </script>
