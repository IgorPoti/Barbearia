<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServicesController extends Controller
{
    public function index (){
        return view('servicos', [
            'Services' => $this->getServices()
        ]);
    }

    public function indexAdmin (){
        return view('dashboard.gerenciarservicos', [
            'Services' => $this->getServices()
        ]);
    }

    public function indexCriarServico (Request $request){
        return view('dashboard.criarservico', [
            'data' => $this->getData($request)
        ]);
    }

    public function indexEditar ($id){
        return view('dashboard.editarservico', [
            'service' => $this->getService($id)
        ]);
    }

    public function getData(Request $request)
    {

        $servico = $request->input('servico');
        $valor = $request->input('valor');

        $data = (object) array(
            'servico' => (object) array(
                'servico' => $servico,
                'valor' => $valor,
            )
        );

        return $data;
    }

    public function store(Request $request)
    {

        $data = $this->getData($request);

        $service = new Service;

        $service->tiposervico = $data->servico->servico;
        $service->valor = $data->servico->valor;

            $service->save();
        
        return redirect("/criarservico");
    }


    public function getServices(){
        $users = Service::select()->orderBy('valor', 'asc')->get();
        return $users;
    }

    public function getService($id){
        $service = Service::where('id',"=",$id)->first();
        return $service;
    }


public function delete($id) 
   { 
     Service::where('id', $id)->delete(); 
  
     return redirect("/gerenciarservicos"); 
   }

  public function edit(Request $request, $id) 
   { 
     $data = $this->getData($request); 
  
     $service = Service::find($id); 
  
     $service->tiposervico = $data->servico->servico;
     $service->valor = $data->servico->valor;

  
     $service->save(); 
  
     return redirect("/gerenciarservicos"); 
   }



   
}

