<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    public function index(){
        // return "bienvenido a la pag cursos";

        // $cursos = Curso::all();
        // $cursos = Curso::paginate();
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        // return "En esta pag podrás crear un curso";
        return view('cursos.create');
    }

    public function store(StoreCurso $request){

        // validacion
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'description' => 'required|min:10',
        //     'category' => 'required'
        // ]);


        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();

        // asignacion masiva con save incluido
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'category' => $request->category
        // ]);
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function show(Curso $curso){
        // return "Bienvenido al curso: $curso";
        // return view('cursos.show', ['curso'=> $curso]);

        // $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        $request->validate([
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);


        // $curso->name = $request->name;
        // $curso->description = $request->description;
        // $curso->category = $request->category;
        // $curso->save();
        //asignacion masivaria
        $curso->update($request->all());

        return redirect()->route('cursos.show', $curso->id);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }

}
