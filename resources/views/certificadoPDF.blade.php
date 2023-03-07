<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>{{$datos[0]}} {{$datos[1]}} {{$datos[2]}}</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    </head>
    <body>
        <div class="contenedor">
            <img src="./images/machote2.png" width="112.1%"  style="margin-top:-2.8em; margin-left:-2.8em; margin-bottom:-2.8em; margin-right:-2.8em">
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
            <div class="informatica">Bachillerato con formación elemental para el trabajo en Informática</div>
            <div class="tit">Módulo acreditado de formación elemental para el trabajo:</div>
            <div class="modulo">
            <table>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td>1.{{$datos[20]}}</td>
                </tr>
            </table>
            </div>
            <div class="tb2">
            <table style="text-align:center;">
                <tr>
                    <td>Calif.</td>
                    <td>Total de Hrs.</td>
                    <td>Créditos</td>
                </tr>
                <tr>
                    <td>{{$datos[21]}}</td>
                    <td>{{$datos[22]}}</td>
                    <td>{{$datos[23]}}</td>
                </tr>
            </table>
            </div>
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
            <div class="f">{{$datos[24]}}</div>
            <div class="m">{{$datos[25]}}</div>
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
        src: url('https://fonts.googleapis.com/css?family=Montserrat') format('truetype');
        font-style: normal;
        font-weight: normal;
    }
    .wrap,
.wrap2{ 
  width:730px;
  white-space: pre-wrap;      /* CSS3 */   
  white-space: -moz-pre-wrap; /* Firefox */    
  white-space: -pre-wrap;     /* Opera <7 */   
  white-space: -o-pre-wrap;   /* Opera 7 */    
  word-wrap: break-word;      /* IE */
}

.wrap{
  height:auto;
  font-size: 9px;
  font-weight: regular;
  font-family: 'Montserrat', sans-serif;
}



.tabla2{
  border-collapse: collapse;
  margin: 0 auto;
}

.nombre{
    position: absolute;
    /*top: 16%;
    left: 10%;*/
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
        left: -37%;
        transform: translate(65%, 65%);
        font-size: 9x;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif;
    }
    .periodo{
        position: absolute;
        top: 37%;
        left: 9%;
        transform: translate(65%, 65%);
        font-size: 9x;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif;
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
    .tit{
        position: absolute;
        top: 46.5%;
        left: -37%;
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
        top: 98%;
        left: -18%;
        transform: translate(65%, 65%);
        font-size: 13px;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif;
    }
    .fSep{
        position: absolute;
        top: 74.3%;
        left:15%;
        transform: translate(65%, 65%);
        font-size: 9px;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif;
    }
    .hSep{
        position: absolute;
        top: 74.3%;
        left: 23%;
        transform: translate(65%, 65%);
        font-size: 9px;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif;
    }
    .f{
        position: absolute;
        top: 93.3%;
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
        top: 93.3%;
        left: 73%;
        transform: translate(65%, 65%);
        font-size: 9px;
        display:flex;
        justify-content: center;
        font-weight: regular;
        font-family: 'Montserrat', sans-serif; 
    }
    </style>
   
</html>