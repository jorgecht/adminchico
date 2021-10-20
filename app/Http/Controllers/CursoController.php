<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCurso;
use App\Mail\ConfirmacionMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }
    public function show(Curso $curso)
    {

        //['curso' => $curso]'
        //$curso = Curso::find($id);
        //return view('cursos.show', compact('curso'));
      
        return view('cursos.show', compact('curso'));
    }

    public function store(StoreCurso $request)
    {
        //return $request->all();
        // reglas de validación que se gestionarán con el Form Request
        /*$request->validate([
            'name'=> 'required',
            'descripcion'=> 'required',
            'categoria'=> 'required'

        ]);*/ 

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->slug = Str::slug($request->name,'-');
        //return $curso;
       // $curso = Curso::create($request->all());
        
        /* $curso = new Curso();

         */

        $curso->save();

        $correo = new ConfirmacionMailable($request->all(),"Registro Guardado","agregados");
        Mail::to('jorge27cht@gmail.com')->send($correo);

        return redirect()->route('cursos.show', $curso);// $curso->id
    }


    public function edit(Curso $curso)
    {
        //return $request->all();

        //$curso = Curso::

        return view('cursos.edit', compact('curso'));
    }

    public function update(Curso $curso, Request $request)
    {
        //return $request->all();

        //$curso = Curso::
        $request->validate([
            'name'=> 'required',
            'descripcion'=> 'required',
            'categoria'=> 'required'

        ]);

        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
    
        $curso->save(); */

        $curso->update($request->all());

        $correo = new ConfirmacionMailable($request->all(),'Registro Actualizado','actualizados');
        Mail::to('jorge27cht@gmail.com')->send($correo);
        
        return redirect()->route('cursos.show', $curso);// $curso->id
    }


    public function destroy(Curso $curso)
    {
        //return $request->all();

        //$curso = Curso::
        $curso->delete();
        $correo = new ConfirmacionMailable($curso,"Registro Eliminado","eliminados");
        Mail::to('jorge27cht@gmail.com')->send($correo);

        return redirect()->route('cursos.index');
    }
    
    

}
