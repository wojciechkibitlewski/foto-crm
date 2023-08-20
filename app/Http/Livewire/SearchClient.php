<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;


class SearchClient extends Component
{
    public $showdiv = false;
    public $showresult = false;
    public $search = "";
    public $records;
    public $clientDetails;

    public function searchResult(){

        if(!empty($this->search)){

            $this->records =client::orderby('name','asc')
                      ->select('*')
                      ->where('name','like','%'.$this->search.'%')
                      ->limit(5)
                      ->get();

            $this->showdiv = true;
            $this->showresult = true;
        }else{
            $this->showdiv = false;
            $this->showresult = false;


        }
    }

    public function fetchClientDetail($id = 0){

        $record = Client::select('*')
                    ->where('id',$id)
                    ->first();

        $this->search = $record->name;
        $this->clientDetails = $record;
        $this->showdiv = false;
        $this->showresult = false;

    }    

    public function render()
    {
        return view('livewire.search-client');
    }
}
