<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrabajoTerminal;
use App\alumnosTT;
use App\directoresTT;
use App\sinodalesTT;
use Illuminate\Support\Facades\DB;
use Auth;

class TTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexTT()
    {
        //Muestra la lista de los trabajos terminales
        $tts = TrabajoTerminal::all();
        foreach ($tts as $tt) {
            $tt->alumnos = alumnosTT::where('id_tt', $tt->id_tt)->get();
            $tt->directores = directoresTT::where('id_tt', $tt->id_tt)->get();
            $tt->sinodales = sinodalesTT::where('id_tt', $tt->id_tt)->get();
        }
        return view('tterminal/list',['tts' => $tts]);
    }
    public function createTT()
    {
        return view('tterminal/addTT');
    }
    public function saveTT(Request $request)
    {
        /*echo json_encode($request->all());
        die();*/

        $id_tt=$request->get('idtt');
        $name=$request->get('name');

        $tt=new TrabajoTerminal();
        $tt->id_tt=$id_tt;
        $tt->nombre=$name;
        $tt->save();

        for($i=1;$i<=3;$i++)
        {
            $alumno1=$request->get("alumno{$i}",null);
            $correo1=$request->get("correo{$i}",null);
            if($alumno1!==null && $correo1!==null )
            {
                $alumno=new alumnosTT();
                $alumno->nombre=$alumno1;
                $alumno->correo=$correo1;
                $alumno->id_tt=$id_tt;
                $alumno->save();
            }
        }

        for($i=1;$i<=2;$i++)
        {
            $director1=$request->get("director{$i}",null);
            $correo1=$request->get("correo{$i}",null);
            if($director1!==null && $correo1!==null )
            {
                $director=new directoresTT();
                $director->nombre=$director1;
                $director->correo=$correo1;
                $director->id_tt=$id_tt;
                $director->save();
            }
        }

        for($i=1;$i<=3;$i++)
        {
            $sinodal1=$request->get("sinodal{$i}",null);
            $correo1=$request->get("correo{$i}",null);
            if($sinodal1!==null && $correo1!==null )
            {
                $sinodal=new sinodalesTT();
                $sinodal->nombre=$sinodal1;
                $sinodal->correo=$correo1;
                $sinodal->id_tt=$id_tt;
                $sinodal->save();
            }
        }

        return redirect('/list_tt');
    }
    public function deleteTT(Request $request, $id)
    {
        TrabajoTerminal::where('id',$id)->delete();
        return redirect('/list_tt');
    }
    public function editTT()
    {
        return view('tterminal/edit');
    }
    
    public function updateTT(Request $request, $id)
    {
        //$tt=TrabajoTerminal::find($id);
        //return redirect('/editar_tt');
    }

    public function showCalendar()
    {
        //$tt=TrabajoTerminal::find($id);
        //return redirect('/editar_tt');
        return view('tterminal/calendarTT');
    }

    
}
