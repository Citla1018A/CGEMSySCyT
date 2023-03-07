<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>{{$datos[0]}} {{$datos[1]}} {{$datos[2]}}</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <body style="font-family: 'Montserrat'">
        <div class="contenedor">
            <img src="./images/machote2.png" width="112.1%"  style="margin-top:-2.8em; margin-left:-2.8em; margin-bottom:-2.8em; margin-right:-2.8em">
            <!--<div class="nombre">{{$datos[0]}} {{$datos[1]}} {{$datos[2]}}</div>-->
            <div class="nombre">
                <table style="text-align:center;">
                    <tr>
                        <td>
                            <div class="wrap1">
                            {{$datos[0]}} {{$datos[1]}} {{$datos[2]}}
                            </div>
                        </td>
                    </tr>                
                </table>
                <!--{{$datos[0]}} {{$datos[1]}} {{$datos[2]}}-->
            </div>
            <div class="curp">{{$datos[3]}}</div>
            <div class="Ncontrol">
                <table style="text-align:center;">
                    <tr>
                        <td>
                            <div class="wrap3">
                            {{$datos[4]}}
                            </div>
                        </td>
                    </tr>
                </table> 
            </div>
            <div class="periodo">Del {{$datos[12]}} de {{$datos[13]}} al {{$datos[14]}} de {{$datos[15]}} del {{$datos[16]}}</div>
            <div class="CredObt">{{$datos[5]}}</div>
            <div class="TotalCred">{{$datos[6]}}</div>
            <div class="promedio">{{$datos[7]}}</div>
            <div class="promedioText">{{$datos[8]}}</div>
            <div class="fSep">{{$datos[18]}}</div>
            <div class="hSep">{{$datos[19]}}</div>
            <div class="informatica">Bachillerato en el área {{$datos[23]}} </div>
            <div class="dec1">
            <table  class="tabla">
                <tr>
                    <td>
                        <div class="wrap">{{$datos[10]}}</div>
                    </td>
                </tr>
            </table>
            </div>
            <div class="sep1">
            <table  class="tabla">
                <tr>
                    <td>
                        <div class="wrap">{{$datos[9]}}</div>
                    </td>
                </tr>
            </table>
            </div>
            <div class="QR">
                <img src="data:image/svg+xml;base64, {{ base64_encode($datos[11]) }}"></img>
                
            </div>
            <div class="folio">{{$datos[17]}}</div>
            <div class="f">{{$datos[20]}}</div>
            <div class="m">{{$datos[21]}}</div>
        </div>
    </body>
    <style>
        .contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
@font-face {
    font-family: 'Montserrat';
    src: url('https://fonts.googleapis.com/css?family=Montserrat');
}
.wrap,
.wrap2{ 
    width:730px;
    white-space: pre-wrap;         
    white-space: -moz-pre-wrap;     
    white-space: -pre-wrap;       
    white-space: -o-pre-wrap;     
    word-wrap: break-word;     
}

.wrap{
    height:auto;
    font-size: 9px;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}

.wrap2 { 
    height:100px;
    overflow: auto;
    width:100px;
}

.tabla2{
    margin-top:50px;
}
.nombre{
position: absolute;

top: 14%;
left: -132%;
transform: translate(65%, 65%);
font-size: 9x;
display:flex;
font-weight: bold;
font-family: 'Montserrat', sans-serif;
text-align:center;
}

.wrap1,
.wrap2{ 
    width:730px;
    white-space: pre-wrap;  
    white-space: -moz-pre-wrap;     
    white-space: -pre-wrap;       
    white-space: -o-pre-wrap;            
    word-wrap: break-word;   
}
.wrap1{
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
    text-align:center;

}
.apellidoP{
    position: absolute;
    top: 16%;
    left: 35%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
}
.apellidoM{
    position: absolute;
    top: 16%;
    left: 48.5%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
}
.curp{
    position: absolute;
    top: 19.5%;
    left: -7%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.Ncontrol{
    position: absolute;
    top: 17%;
    left: -104%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
    text-align:center;
}
.wrap3,
.wrap2{ 
    width:730px;
    white-space: pre-wrap;  
    white-space: -moz-pre-wrap;     
    white-space: -pre-wrap;       
    white-space: -o-pre-wrap;            
    word-wrap: break-word;   
}
.wrap3{
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
    text-align:center;

}
.informatica{
    position: absolute;
    top: 33%;
    left: -14%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
    align-items: center;
    
}
.periodo{
    position: absolute;
    top: 37%;
    left: 18%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
    align-items: center;
}
.CredObt{
    position: absolute;
    top: 40.5%;
    left: 10%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.TotalCred{
    position: absolute;
    top: 40.5%;
    left: 43.9%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.promedio{
    position: absolute;
    top: 40.5%;
    left: 68%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.modulo{
    position: absolute;
    top: 50%;
    left: -8.6%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.tb2{
    position: absolute;
    top: 49%;
    left: 55.5%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.promedioText{
    position: absolute;
    top: 40.5%;
    left: 64%;
    transform: translate(65%, 65%);
    font-size: 9x;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.sep1{
    position: absolute;
    top: 77%;
    left: -1.5%;
    display:flex;
    justify-content: center;
}
.dec1{
    position: absolute;
    top: 69.5%;
    left: -1.5%;
    display:flex;
    justify-content: center
}
.s1{
    position: absolute;
    top: 66.5%;
    left: -95.2%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.QR{
    position: absolute;
    top: 77%;
    left: -9%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
}
.folio{
    position: absolute;
    top: 97.5%;
    left: -19%;
    transform: translate(65%, 65%);
    font-size: 13px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.fSep{
    position: absolute;
    top: 73.8%;
    left:14%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.hSep{
    position: absolute;
    top: 73.8%;
    left: 24%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.f{
    position: absolute;
    top: 92.8%;
    left: 56%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif;
}
.m{
    position: absolute;
    top: 92.8%;
    left: 71.5%;
    transform: translate(65%, 65%);
    font-size: 9px;
    display:flex;
    justify-content: center;
    font-weight: regular;
    font-family: 'Montserrat', sans-serif; 
}
    </style>
</html>