<?php

namespace App\Http\Controllers;

use Attribute;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\PDF;
//use PDF;
use DateTime;
use DateTimeZone;
use Dompdf\Dompdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class XmlController extends Controller
{
    function obtenerDatos22(Request $request){
      $XML = simplexml_load_file($request -> documentoXML );
         $phpArray = array();
         $documentoP = $XML -> Acreditacion -> attributes();
         $idTipoEstudiosIEMS = $phpArray=$documentoP['idTipoEstudiosIEMS'];
         $bandera=false;
         echo"$bandera";
         if($idTipoEstudiosIEMS == 44){
          $bandera=true;
          Alert::error('<b style="color:red">Error de subida</b>', 'Lo sentimos este formato no corresponde a la selección anterior',$XML);
          return view("welcome");
         }else{
          //INFORMATICA PLAN 22
          $documento22 = $XML -> UacsdeFt -> attributes();
          $doc = $XML -> UacsdeFt -> UacdeFt -> attributes();
          $informatica = $phpArray = $doc['nombre'];
          $calificacion = $phpArray = $doc['calificacion'];
          $totalHorasUAC = $phpArray = $doc['totalHorasUAC'];
          $creditos = $phpArray = $doc['creditos'];
          //echo $informatica;
         //ALUMNO 
         $documento = $XML -> Alumno -> attributes();
         $nombre = $phpArray = $documento['nombre'];
         $apellidoP = $phpArray= $documento['primerApellido'];
         $apellidoM = $phpArray = $documento['segundoApellido'];
         $curp = $phpArray = $documento['curp'];  
         $numeroControl = $phpArray  =$documento['numeroControl'];  
         //Periodo
         $documentoP = $XML -> Acreditacion -> attributes();
         $periodoIn = $phpArray=$documentoP['periodoInicio'];
         $periodoTe = $phpArray=$documentoP['periodoTermino'];
         $creditosObtenidos = $phpArray=$documentoP['creditosObtenidos'];
         $totalCreditos = $phpArray = $documentoP['totalCreditos'];
         $promedioAprovechamiento = $phpArray = $documentoP['promedioAprovechamiento'];
         $promedioAprovechamientoTexto = $phpArray = $documentoP['promedioAprovechamientoTexto'];
         //Sep
         $documentoS = $XML -> Sep -> attributes();
         $folioDigital = $phpArray=$documentoS['folioDigital'];
         $fechaSep = $phpArray=$documentoS['fechaSep'];
         $selloDec = $phpArray=$documentoS['selloDec'];
         $selloSep = $phpArray=$documentoS['selloSep'];
         $QR = QrCode::size(100)->generate("https://www.siged.sep.gob.mx/certificados/iems/$folioDigital");
         $dia=$this->fechaLetra($periodoIn,$periodoTe);
         $diaT=$this->diaTLetra($periodoIn,$periodoTe);
         $mesT=$this->mesTLetra($periodoIn,$periodoTe);
         $mesI=$this->mesILetra($periodoIn,$periodoTe);
         $annT=$this->annioT($periodoIn,$periodoTe);
         $fSep=$this->formatearFechas($fechaSep);
         $hSep=$this->horaSep($fechaSep);
         $diat=$this->dia($fechaSep);
         $mest=$this->mes($fechaSep);
         $ant=$this->ann($fechaSep);
         $this->letrasAnn($periodoTe);
         //       0         1         2         3       4               5                 6                 7
       $datos = [$nombre,$apellidoP,$apellidoM,$curp,$numeroControl,$creditosObtenidos,$totalCreditos,$promedioAprovechamiento,
       //8                              9         10      11  12    13    14    15    16      17          18    19      20
       $promedioAprovechamientoTexto,$selloSep,$selloDec,$QR,$dia,$mesI,$diaT,$mesT,$annT,$folioDigital,$fSep,$hSep,$informatica,//21-22-23-24
       // 21            22              23      24    25  26
       $calificacion,$totalHorasUAC,$creditos,$diat,$mest,$ant];
        return $this->generatePDF($datos,$curp);
         }
    }
    function obtenerDatos33(Request $request){
      $XML = simplexml_load_file($request -> documentoXML );
         $phpArray = array();
         $documentoP = $XML -> Acreditacion -> attributes();
         $idTipoEstudiosIEMS = $phpArray=$documentoP['idTipoEstudiosIEMS'];
         if($idTipoEstudiosIEMS == 26){
          Alert::error('<b style="color:red">Error de subida</b>', 'Lo sentimos este formato no corresponde a la selección anterior',$XML);
          return view("welcome");
         }else{
         //ALUMNO 
         $doc = $XML -> PerfilEgresoEspecifico -> attributes();
         $perfilEgreso = $phpArray = $doc['trayecto'];
         $documento = $XML -> Alumno -> attributes();
         $nombre = $phpArray = $documento['nombre'];
         $apellidoP = $phpArray= $documento['primerApellido'];
         $apellidoM = $phpArray = $documento['segundoApellido'];
         $curp = $phpArray = $documento['curp'];  
         $numeroControl = $phpArray  =$documento['numeroControl'];  
         //Periodo
         //$documentoP = $XML -> Acreditacion -> attributes();
         $periodoIn = $phpArray=$documentoP['periodoInicio'];
         $periodoTe = $phpArray=$documentoP['periodoTermino'];
         $creditosObtenidos = $phpArray=$documentoP['creditosObtenidos'];
         $totalCreditos = $phpArray = $documentoP['totalCreditos'];
         $promedioAprovechamiento = $phpArray = $documentoP['promedioAprovechamiento'];
         $promedioAprovechamientoTexto = $phpArray = $documentoP['promedioAprovechamientoTexto'];
         //Sep
         $documentoS = $XML -> Sep -> attributes();
         $folioDigital = $phpArray=$documentoS['folioDigital'];
         $fechaSep = $phpArray=$documentoS['fechaSep'];
         $selloDec = $phpArray=$documentoS['selloDec'];
         $selloSep = $phpArray=$documentoS['selloSep'];
         $QR = QrCode::
         size(100)->generate("https://www.siged.sep.gob.mx/certificados/iems/$folioDigital");
         //$QRbase64 = "data:image/png;base64,". base64_encode(file_get_contents($QR));
         //echo $QR;
         //$QQ="https://www.siged.sep.gob.mx/certificados/iems/$folioDigital";
         $dia=$this->fechaLetra($periodoIn,$periodoTe);
         $diaT=$this->diaTLetra($periodoIn,$periodoTe);
         $mesT=$this->mesTLetra($periodoIn,$periodoTe);
         $mesI=$this->mesILetra($periodoIn,$periodoTe);
         $annT=$this->annioT($periodoIn,$periodoTe);
         $fSep=$this->formatearFechas($fechaSep);
         $hSep=$this->horaSep($fechaSep);
         $diat=$this->dia($fechaSep);
         $mest=$this->mes($fechaSep);
         $ant=$this->ann($fechaSep);
         $this->letrasAnn($periodoTe);
         //echo $QQ."<br>";
         //echo $folioDigital;
                // 0    -  1       -   2         3      4             5                     6          7
       $datos = [$nombre,$apellidoP,$apellidoM,$curp,$numeroControl,$creditosObtenidos,$totalCreditos,$promedioAprovechamiento,
       //8                                9     10       11   12   13    14    15    16     17           18     19    20   21    22    23
       $promedioAprovechamientoTexto,$selloSep,$selloDec,$QR,$dia,$mesI,$diaT,$mesT,$annT,$folioDigital,$fSep,$hSep,$diat,$mest,$ant,$perfilEgreso];//23
        return $this->generatePDF33($datos,$curp);
         }
    }
    public function generatePDF($datos,$curp){
     // $pdf = PDF::loadView('certificadoPDF',compact('nombre'),compact('apellidoP'),compact('curp'));
     $pdf = PDF::loadView('certificadoPDF',compact('datos'));
     $pdf->setPaper(array(0, 0, 612, 792));
     $pdf->render();
     return $pdf->stream($curp."_certificado22final.pdf");
    //return $pdf->download($curp."_certificado22final.pdf");
    //return view('certificadoPDF',compact('datos'));
    }
    public function generatePDF33($datos,$curp){
      $pdf = PDF::loadView('certificadoPDF33',compact('datos'));
      $pdf->setPaper(array(0, 0, 612, 792));
      $pdf->render();
      return $pdf->download($curp."_certificado33final.pdf");
      //return $pdf->stream($curp."_certificado33final.pdf");
    //return view('certificadoPDF33',compact('datos'));
    }
    function mesILetra($periodoIn,$periodoTe){
      $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
      if($mesI == 01 ){
        $enero="enero";
        $mesI=$enero;
      } else if ($mesI == 02){
        $febrero="febrero";
        $mesI=$febrero;
      } else if ($mesI == 03){
        $marzo="marzo";
        $mesI=$marzo;
      } else if ($mesI == 04){
        $abril="abril";
        $mesI=$abril;
      } else if ($mesI == 05){
        $mayo="mayo";
        $mesI=$mayo;
      } else if ($mesI == 06){
        $junio="junio";
        $mesI=$junio;
      } else if ($mesI == 07){
        $julio="julio";
        $mesI=$julio;
      } else if ($mesI == 8){
        $agosto="agosto";
        $mesI=$agosto;
      } else if ($mesI == 9){
        $septiembre="septiembre";
        $mesI=$septiembre;
      } else if ($mesI == 10){
        $octubre="octubre";
        $mesI=$octubre;
      } else if ($mesI == 11){
        $noviembre="noviembre";
        $mesI=$noviembre;
      } else if ($mesI == 12){
        $diciembre="diciembre";
        $mesI=$diciembre;
      }
      return $mesI;
    }
    function mesTLetra($periodoIn,$periodoTe){
      $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
        if($mesT == 01 ){
          $enero="enero";
          $mesT=$enero;
        } else if ($mesT == 02){
          $febrero="febrero";
          $mesT=$febrero;
        } else if ($mesT == 03){
          $marzo="marzo";
          $mesT=$marzo;
        } else if ($mesT == 04){
          $abril="abril";
          $mesT=$abril;
        } else if ($mesT == 05){
          $mayo="mayo";
          $mesT=$mayo;
        } else if ($mesT == 06){
          $junio="junio";
          $mesT=$junio;
        } else if ($mesT == 07){
          $julio="julio";
          $mesT=$julio;
        } else if ($mesT == 8){
          $agosto="agosto";
          $mesT=$agosto;
        } else if ($mesT == 9){
          $septiembre="septiembre";
          $mesT=$septiembre;
        } else if ($mesT == 10){
          $octubre="octubre";
          $mesT=$octubre;
        } else if ($mesT == 11){
          $noviembre="noviembre";
          $mesT=$noviembre;
        } else if ($mesT == 12){
          $diciembre="diciembre";
          $mesT=$diciembre;
        }
        return $mesT;
    }
    function dTLetra($periodoIn,$periodoTe){
        $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
      if($diaT==1){
        $Uno="un";
        $diaT=$Uno;
    } else if ($diaT == 2){
        $Dos="dos";
        $diaT=$Dos;
      }else if ($diaT == 3){
        $tres="tres";
        $diaT=$tres;
      }else if ($diaT == 4){
        $cuatro="cuatro";
        $diaT=$cuatro;
      }else if ($diaT == 5){
        $cinco="cinco";
        $diaT=$cinco;
      }else if ($diaT == 6){
        $seis="seis";
        $diaT=$seis;
      }else if ($diaT == 7){
        $siete="siete";
        $diaT=$siete;
      }else if ($diaT == 8){
        $ocho="ocho";
        $diaT=$ocho;
      }else if ($diaT == 9){
        $nueve="nueve";
        $diaT=$nueve;
      }else if ($diaT == 10){
        $diez="diez";
        $diaT=$diez;
      }else if ($diaT == 11){
        $Once="once";
        $diaT=$Once;
      }else if ($diaT == 12){
        $Doce="doce";
        $diaT=$Doce;
      }else if ($diaT == 13){
        $Trece="trece";
        $diaT=$Trece;
      }else if ($diaT == 14){
        $Catorce="catorce";
        $diaT=$Catorce;
      }else if ($diaT == 15){
        $Quince="quince";
        $diaT=$Quince;
      }else if ($diaT == 16){
        $Dieciseis="dieciséis";
        $diaT=$Dieciseis;
      }else if ($diaT == 17){
        $Diecisiete="diecisiete";
        $diaT=$Diecisiete;
      }else if ($diaT == 18){
        $Dieciocho="dieciocho";
        $diaT=$Dieciocho;
      }else if ($diaT == 19){
        $Diecinueve="diecinueve";
        $diaT=$Diecinueve;
      }else if ($diaT == 20){
        $Veinte="veinte";
        $diaT=$Veinte;
      }else if ($diaT == 21){
        $Veintiuno="veintiuno";
        $diaT=$Veintiuno;
      }else if ($diaT == 22){
        $Veintidos="veintidós";
        $diaT=$Veintidos;
      }else if ($diaT == 23){
        $Veintitres="veintitrés";
        $diaT=$Veintitres;
      }else if ($diaT == 24){
        $Veinticuatro="veinticuatro";
        $diaT=$Veinticuatro;
      }else if ($diaT == 25){
        $Veinticinco="veinticinco";
        $diaT=$Veinticinco;
      }else if ($diaT == 26){
        $Veintiseis="veintiséis";
        $diaT=$Veintiseis;
      }else if ($diaT == 27){
        $Veintisiete="veintisiete";
        $diaT=$Veintisiete;
      }else if ($diaT == 28){
        $Veintiocho="veintiocho";
        $diaT=$Veintiocho;
      }else if ($diaT == 29){
        $Veintinueve="veintinueve";
        $diaT=$Veintinueve;
      }else if ($diaT == 30){
        $Treinta="treinta";
        $diaT=$Treinta;
      }else if ($diaT == 31){
        $Treintauno="treinta y uno";
        $diaT=$Treintauno;
      }
      return $diaT;
    }
    function diaTLetra($periodoIn,$periodoTe){
      $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
       /* if($diaT==1){
          $Uno="un";
          $diaT=$Uno;
      } else if ($diaT == 2){
          $Dos="dos";
          $diaT=$Dos;
        }else if ($diaT == 3){
          $tres="tres";
          $diaT=$tres;
        }else if ($diaT == 4){
          $cuatro="cuatro";
          $diaT=$cuatro;
        }else if ($diaT == 5){
          $cinco="cinco";
          $diaT=$cinco;
        }else if ($diaT == 6){
          $seis="seis";
          $diaT=$seis;
        }else if ($diaT == 7){
          $siete="siete";
          $diaT=$siete;
        }else if ($diaT == 8){
          $ocho="ocho";
          $diaT=$ocho;
        }else if ($diaT == 9){
          $nueve="nueve";
          $diaT=$nueve;
        }else if ($diaT == 10){
          $diez="diez";
          $diaT=$diez;
        }else if ($diaT == 11){
          $Once="once";
          $diaT=$Once;
        }else if ($diaT == 12){
          $Doce="doce";
          $diaT=$Doce;
        }else if ($diaT == 13){
          $Trece="trece";
          $diaT=$Trece;
        }else if ($diaT == 14){
          $Catorce="catorce";
          $diaT=$Catorce;
        }else if ($diaT == 15){
          $Quince="quince";
          $diaT=$Quince;
        }else if ($diaT == 16){
          $Dieciseis="dieciséis";
          $diaT=$Dieciseis;
        }else if ($diaT == 17){
          $Diecisiete="diecisiete";
          $diaT=$Diecisiete;
        }else if ($diaT == 18){
          $Dieciocho="dieciocho";
          $diaT=$Dieciocho;
        }else if ($diaT == 19){
          $Diecinueve="diecinueve";
          $diaT=$Diecinueve;
        }else if ($diaT == 20){
          $Veinte="veinte";
          $diaT=$Veinte;
        }else if ($diaT == 21){
          $Veintiuno="veintiuno";
          $diaT=$Veintiuno;
        }else if ($diaT == 22){
          $Veintidos="veintidós";
          $diaT=$Veintidos;
        }else if ($diaT == 23){
          $Veintitres="veintitrés";
          $diaT=$Veintitres;
        }else if ($diaT == 24){
          $Veinticuatro="veinticuatro";
          $diaT=$Veinticuatro;
        }else if ($diaT == 25){
          $Veinticinco="veinticinco";
          $diaT=$Veinticinco;
        }else if ($diaT == 26){
          $Veintiseis="veintiséis";
          $diaT=$Veintiseis;
        }else if ($diaT == 27){
          $Veintisiete="veintisiete";
          $diaT=$Veintisiete;
        }else if ($diaT == 28){
          $Veintiocho="veintiocho";
          $diaT=$Veintiocho;
        }else if ($diaT == 29){
          $Veintinueve="veintinueve";
          $diaT=$Veintinueve;
        }else if ($diaT == 30){
          $Treinta="treinta";
          $diaT=$Treinta;
        }else if ($diaT == 31){
          $Treintauno="treinta y uno";
          $diaT=$Treintauno;
        }*/
        return $diaT;        
    }
     function fechaLetra($periodoIn,$periodoTe){
        $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
       /* if($diaI==1){
            $Uno="un";
            $diaI=$Uno;
        } else if ($diaI == 2){
            $Dos="dos";
            $diaI=$Dos;
          }else if ($diaI == 3){
            $tres="tres";
            $diaI=$tres;
          }else if ($diaI == 4){
            $cuatro="cuatro";
            $diaI=$cuatro;
          }else if ($diaI == 5){
            $cinco="cinco";
            $diaI=$cinco;
          }else if ($diaI == 6){
            $seis="seis";
            $diaI=$seis;
          }else if ($diaI == 7){
            $siete="siete";
            $diaI=$siete;
          }else if ($diaI == 8){
            $ocho="ocho";
            $diaI=$ocho;
          }else if ($diaI == 9){
            $nueve="nueve";
            $diaI=$nueve;
          }else if ($diaI == 10){
            $diez="diez";
            $diaI=$diez;
          }else if ($diaI == 11){
            $Once="once";
            $diaI=$Once;
          }else if ($diaI == 12){
            $Doce="doce";
            $diaI=$Doce;
          }else if ($diaI == 13){
            $Trece="trece";
            $diaI=$Trece;
          }else if ($diaI == 14){
            $Catorce="catorce";
            $diaI=$Catorce;
          }else if ($diaI == 15){
            $Quince="quince";
            $diaI=$Quince;
          }else if ($diaI == 16){
            $Dieciseis="dieciséis";
            $diaI=$Dieciseis;
          }else if ($diaI == 17){
            $Diecisiete="diecisiete";
            $diaI=$Diecisiete;
          }else if ($diaI == 18){
            $Dieciocho="dieciocho";
            $diaI=$Dieciocho;
          }else if ($diaI == 19){
            $Diecinueve="diecinueve";
            $diaI=$Diecinueve;
          }else if ($diaI == 20){
            $Veinte="veinte";
            $diaI=$Veinte;
          }else if ($diaI == 21){
            $Veintiuno="veintiuno";
            $diaI=$Veintiuno;
          }else if ($diaI == 22){
            $Veintidos="veintidós";
            $diaI=$Veintidos;
          }else if ($diaI == 23){
            $Veintitres="veintitrés";
            $diaI=$Veintitres;
          }else if ($diaI == 24){
            $Veinticuatro="veinticuatro";
            $diaI=$Veinticuatro;
          }else if ($diaI == 25){
            $Veinticinco="veinticinco";
            $diaI=$Veinticinco;
          }else if ($diaI == 26){
            $Veintiseis="veintiséis";
            $diaI=$Veintiseis;
          }else if ($diaI == 27){
            $Veintisiete="veintisiete";
            $diaI=$Veintisiete;
          }else if ($diaI == 28){
            $Veintiocho="veintiocho";
            $diaI=$Veintiocho;
          }else if ($diaI == 29){
            $Veintinueve="veintinueve";
            $diaI=$Veintinueve;
          }else if ($diaI == 30){
            $Treinta="treinta";
            $diaI=$Treinta;
          }else if ($diaI == 31){
            $Treintauno="treinta y uno";
            $diaI=$Treintauno;
          }*/
          //MES
          return $diaI;
         //echo "Del ",$diaI," de ",$mesI," de ",$annI," al ",$diaT," de ",$mesT," de ",$annT;
     }
     function formatearFechas($fechaSep){
        //formatear fecha sep
        $objFechasep = new DateTime($fechaSep, new DateTimeZone('America/Mexico_City'));
        $diaSep=$objFechasep->format('d');
        $mesSep=$objFechasep->format('m');
        $annSep=$objFechasep->format('Y');
        $fecha=$diaSep."/".$mesSep."/".$annSep;
        //hora sep
        return $fecha;
     }
     function dia($fechaSep){
        $objFechasep = new DateTime($fechaSep, new DateTimeZone('America/Mexico_City'));
        $diaSep=$objFechasep->format('d');
        $mesSep=$objFechasep->format('m');
        $annSep=$objFechasep->format('Y');
        if($diaSep==1){
          $Uno="un";
          $diaSep=$Uno;
      } else if ($diaSep == 2){
          $Dos="dos";
          $diaSep=$Dos;
        }else if ($diaSep == 3){
          $tres="tres";
          $diaSep=$tres;
        }else if ($diaSep == 4){
          $cuatro="cuatro";
          $diaSep=$cuatro;
        }else if ($diaSep == 5){
          $cinco="cinco";
          $diaSep=$cinco;
        }else if ($diaSep == 6){
          $seis="seis";
          $diaSep=$seis;
        }else if ($diaSep == 7){
          $siete="siete";
          $diaSep=$siete;
        }else if ($diaSep == 8){
          $ocho="ocho";
          $diaSep=$ocho;
        }else if ($diaSep == 9){
          $nueve="nueve";
          $diaSep=$nueve;
        }else if ($diaSep == 10){
          $diez="diez";
          $diaSep=$diez;
        }else if ($diaSep == 11){
          $Once="once";
          $diaSep=$Once;
        }else if ($diaSep == 12){
          $Doce="doce";
          $diaSep=$Doce;
        }else if ($diaSep == 13){
          $Trece="trece";
          $diaSep=$Trece;
        }else if ($diaSep == 14){
          $Catorce="catorce";
          $diaSep=$Catorce;
        }else if ($diaSep == 15){
          $Quince="quince";
          $diaSep=$Quince;
        }else if ($diaSep == 16){
          $Dieciseis="dieciséis";
          $diaSep=$Dieciseis;
        }else if ($diaSep == 17){
          $Diecisiete="diecisiete";
          $diaSep=$Diecisiete;
        }else if ($diaSep == 18){
          $Dieciocho="dieciocho";
          $diaSep=$Dieciocho;
        }else if ($diaSep == 19){
          $Diecinueve="diecinueve";
          $diaSep=$Diecinueve;
        }else if ($diaSep == 20){
          $Veinte="veinte";
          $diaSep=$Veinte;
        }else if ($diaSep == 21){
          $Veintiuno="veintiuno";
          $diaSep=$Veintiuno;
        }else if ($diaSep == 22){
          $Veintidos="veintidós";
          $diaSep=$Veintidos;
        }else if ($diaSep == 23){
          $Veintitres="veintitrés";
          $diaSep=$Veintitres;
        }else if ($diaSep == 24){
          $Veinticuatro="veinticuatro";
          $diaSep=$Veinticuatro;
        }else if ($diaSep == 25){
          $Veinticinco="veinticinco";
          $diaSep=$Veinticinco;
        }else if ($diaSep == 26){
          $Veintiseis="veintiséis";
          $diaSep=$Veintiseis;
        }else if ($diaSep == 27){
          $Veintisiete="veintisiete";
          $diaSep=$Veintisiete;
        }else if ($diaSep == 28){
          $Veintiocho="veintiocho";
          $diaSep=$Veintiocho;
        }else if ($diaSep == 29){
          $Veintinueve="veintinueve";
          $diaSep=$Veintinueve;
        }else if ($diaSep == 30){
          $Treinta="treinta";
          $diaSep=$Treinta;
        }else if ($diaSep == 31){
          $Treintauno="treinta y uno";
          $diaSep=$Treintauno;
        }
        return $diaSep;
     }
     function mes($fechaSep){
      $objFechasep = new DateTime($fechaSep, new DateTimeZone('America/Mexico_City'));
      $diaSep=$objFechasep->format('d');
      $mesSep=$objFechasep->format('m');
      $annSep=$objFechasep->format('Y');
      if($mesSep == 01 ){
        $enero="enero";
        $mesSep=$enero;
      } else if ($mesSep == 02){
        $febrero="febrero";
        $mesSep=$febrero;
      } else if ($mesSep == 03){
        $marzo="marzo";
        $mesSep=$marzo;
      } else if ($mesSep == 04){
        $abril="abril";
        $mesSep=$abril;
      } else if ($mesSep == 05){
        $mayo="mayo";
        $mesSep=$mayo;
      } else if ($mesSep == 06){
        $junio="junio";
        $mesSep=$junio;
      } else if ($mesSep == 07){
        $julio="julio";
        $mesSep=$julio;
      } else if ($mesSep == 8){
        $agosto="agosto";
        $mesSep=$agosto;
      } else if ($mesSep == 9){
        $septiembre="septiembre";
        $mesSep=$septiembre;
      } else if ($mesSep == 10){
        $octubre="octubre";
        $mesSep=$octubre;
      } else if ($mesSep == 11){
        $noviembre="noviembre";
        $mesSep=$noviembre;
      } else if ($mesSep == 12){
        $diciembre="diciembre";
        $mesSep=$diciembre;
      }
      return $mesSep;
   }
   function ann($fechaSep){
    $objFechasep = new DateTime($fechaSep, new DateTimeZone('America/Mexico_City'));
    $diaSep=$objFechasep->format('d');
    $mesSep=$objFechasep->format('m');
    $annSep=$objFechasep->format('Y');
    return $annSep;
 }
     function horaSep($fechaSep){
        $objFechasep = new DateTime($fechaSep, new DateTimeZone('America/Mexico_City'));
        $horaSep=$objFechasep->format('H');
        $sgSep=$objFechasep->format('i');
        $ssSep=$objFechasep->format('s');
        $hora=$horaSep.":".$sgSep.":".$ssSep;
        return $hora;
     }
     function annioT($periodoIn,$periodoTe){
      $cadenaPI=$periodoIn;
        $cadenaPT=$periodoTe;
        //formatear cada uno dia-mes-año
        $objFecha = new DateTime($cadenaPI, new DateTimeZone('America/Mexico_City'));
        $diaI=$objFecha->format('d');
        $mesI=$objFecha->format('m');
        $annI=$objFecha->format('Y');
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $diaT=$objFecha->format('d');
        $mesT=$objFecha->format('m');
        $annT=$objFecha->format('Y');
        return $annT;
     }
     function letrasAnn($periodoTe){
      $cadenaPT=$periodoTe;
        $objFecha = new DateTime($cadenaPT, new DateTimeZone('America/Mexico_City'));
        $annT=$objFecha->format('Y');
        $millar=$annT[0];
        $centena=$annT[1];
        $decena=$annT[2];
        $unidad=$annT[3];
     /*   echo $millar,"<br>";
        echo $centena,"<br>";
        echo $decena,"<br>";
        echo $unidad,"<br>";*/
        if($millar==1){
          $mil="mil";
          $millar=$mil;
        }
        if($millar==2){
          $dmil="dos mil";
          $millar=$dmil;
        }
        if($millar==3){
          $tremil="tres mil";
          $millar=$tremil;
        }
        if($millar==4){
          $catmil="cuatro mil";
          $millar=$catmil;
        }
        if($millar==5){
          $quinmil="cinco mil";
          $millar=$quinmil;
        }
        if($millar==6){
          $seismil="seis mil";
          $millar=$seismil;
        }
        if($millar==7){
          $sietemil="siete mil";
          $millar=$sietemil;
        }
        if($millar==8){
          $ochomil="ocho mil";
          $millar=$ochomil;
        }
        if($millar==9){
          $nuevemil="nueve mil";
          $millar=$nuevemil;
        }
        if($centena==0){
          $cero=" ";
          $centena=$cero;
        }
        if($centena==1){
          $cien="cien";
          $centena=$cien;
          echo "<br>:".$centena."<br>";
        }
        if($centena==2){
          $dosc="doscientos";
          $centena=$dosc;
          echo "<br>:".$centena."<br>";
        }
        if($centena==3){
          $trec="trecientos";
          $centena=$trec;
          echo "<br>:".$centena."<br>";
        }
        if($centena==4){
          $cc="cuatrocientos";
          $centena=$cc;
        }
        if($centena==5){
          $quin="quinientos";
          $centena=$quin;
        }
        if($centena==6){
          $sec="seiscientos";
          $centena=$sec;
        }
        if($centena==7){
          $setc="setecientos";
          $centena=$setc;
        }
        if($centena==8){
          $ochc="ochocientos";
          $centena=$ochc;
        }
        if($centena==9){
          $novc="novecientos";
          $centena=$novc;
        }
        if($decena==0){
          $isC=" ";
          $decena=$isC;
        }
        //EN CASO DE DIEZ Y VEINTE
        if($decena==1 && $unidad==0){
          $diezz="diez";
          $decena=$diezz;
        }
        if($decena==2 && $unidad==0){
          $veintee="veinte";
          $decena=$veintee;
        }
        //CASO DE NUMEROS CON TILDE
        if($decena==1 && $unidad > 1){
           if($unidad==6){
            $unTilde="séis";
            $unidad=$unTilde;
           }
        }
        if($decena==1 && $unidad > 1){
          if($unidad==6){
           $unTilde="séis";
           $unidad=$unTilde;
          }
       }
       if($decena==2 && $unidad > 1){
        if($unidad==2){
         $dosTilde="dós";
         $unidad=$dosTilde;
        }
        if($unidad==3){
          $treTilde="trés";
          $unidad=$treTilde;
         }
         if($unidad==6){
          $unTilde="séis";
          $unidad=$unTilde;
         }
  
     }
        //CASO 2 Veinti y Dieci
        if($decena==1){
          $dieci="dieci";
          $decena=$dieci;
        }
        if($decena==2){
          $veinti="veinti";
          $decena=$veinti;
        }
        //CASO 3 DECENAS NORMALES
        if($decena==3 && $unidad==0){
          $treinta="treinta";
          $finalannio[2]=$treinta;
          echo "".$treinta."";
        }if($decena==3){
          $treinta="treinta y";
          $decena=$treinta;
          echo "".$treinta."";
        }
        if($decena==4 && $unidad==0){
          $cuarenta="cuarenta";
          $decena=$cuarenta;
        }if($decena==4){
          $cuarenta="cuarenta y";
          $decena=$cuarenta;
        }
        if($decena==5 && $unidad==0){
          $cincuenta="cincuenta";
          $decena=$cincuenta;
        }if($decena==5){
          $cincuenta="cincuenta y";
          $decena=$cincuenta;
        }
        if($decena==6 && $unidad==0){
          $sesenta="sesenta";
          $decena=$sesenta;
        }if($decena==6){
          $sesenta="sesenta y";
          $decena=$sesenta;
        }
        if($decena==7 && $unidad==0){
          $setenta="setenta";
          $decena=$setenta;
        }if($decena==7){
          $sesenta="setenta y";
          $decena=$setenta;
          echo "".$sesenta."";
        }
        if($decena==8 && $unidad==0){
          $ochenta="ochenta";
          $decena=$ochenta;
        }if($decena==8){
          $ochenta="ochenta y";
          $decena=$ochenta;
        }
        if($decena==9 && $unidad==0){
          $noventa="noventa";
          $decena=$noventa;
        }if($decena==9){
          $noventa="noventa y";
          $decena=$noventa;
        }
        //UNIDAD
        if($unidad==1){
          $uno="uno";
          $unidad=$uno;
        }
        if($unidad==2){
          $uD="dos";
          $unidad=$uD;
        }
        if($unidad==3){
          $uT="tres";
          $unidad=$uT;
        }
        if($unidad==4){
          $uC="cuatro";
          $unidad=$uC;
        }
        if($unidad==5){
          $uCi="cinco";
          $unidad=$uCi;
        }
        if($unidad==6){
          $uS="seis";
          $funidad=$uS;
        }
        if($unidad==7){
          $uSi="siete";
          $unidad=$uSi;
        }
        if($unidad==8){
          $uO="ocho";
          $unidad=$uO;
        }
        if($unidad==9){
          $uN="nueve";
          $unidad=$uN;
        }
       /* echo $millar,"<br>";
        echo $centena,"<br>";
        echo $decena,"<br>";
        echo $unidad,"<br>";*/
     }
     
}
