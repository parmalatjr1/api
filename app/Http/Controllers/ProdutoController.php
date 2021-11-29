<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ProdutoController extends Controller
{
    private $produto;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

//----------------------------------------------------------------------
//----------------------------------------------------------------------
    public Function index()
    {
        $data= ['data' =>$this->produto->paginate(10)];

        return response()->json($data);
    
    }

//----------------------------------------------------------------------
//----------------------------------------------------------------------
    public function show($id)

    {
        $produto = $this->produto->find($id);

            if(! $produto) return response()->json(['errorMessage' => 'Produto não encontrado',4040]);

            $data =  $produto;
            return response()->json($data);      

    }
//----------------------------------------------------------------------
//----------------------------------------------------------------------
    public function store(Request $request)
    {
        try{

        $produtoData = $request->all();
        $this->produto->create($produtoData);

        return response()->json(['Mensagem' => 'Produto adicionado com sucesso'],201);
    }
    catch (\Exception $e){

        if(config('app.debug'))
        {
           
            return response()->json(['errorMessage' => 'Houve um erro ao realizar a operação de criar',1010]);
        }

        return response()->json(['errorMessage' => 'Houve um erro ao realizar a operação de criar',1010]);
        

    }  
    }
    //----------------------------------------------------------------------
    //----------------------------------------------------------------------
    public function update(Request $request, $id)
    {
       try{

        $produtoData = $request->all();
        $produto = $this->produto->find($id);
        $produto->update($produtoData);


        return response()->json(['Mensagem' => 'Produto atualizado com sucesso',202]);
        
    }
    catch (\Exception $e){

       if(config('app.debug'))
       {
           response()->json(['errorMessage' => 'Houve um erro ao realizar a atualização',1011]);
            
        }

        return response()->json(['errorMessage' => 'Houve um erro ao realizar a atualização',1011]);
        
    }  

    }  
//----------------------------------------------------------------------
//----------------------------------------------------------------------
    public function delete (Produto $id)
    {
        try{

            $id->delete();

            return response()->json(['Mensagem' =>'Produto removido com sucesso'],204);

        }
        catch (\Exception $e){

           if(config('app.debug'))
           {
                
                return response()->json(['errorMessage' => 'Houve um erro ao realizar o delete',1012]);
            
            }
    
            return response()->json(['errorMessage' => 'Houve um erro ao realizar o delete',1012]);
    
        }  
    

    }   

}

/*
* <nome da instituição> Unime
* <nome do curso> Sistemas de Informação
* <nome da disciplina> PpW2
* <nome do professor> Pablo Roxo
* <nome do(s) aluno(s)> Geraldo A. da Silva Júnior
*/