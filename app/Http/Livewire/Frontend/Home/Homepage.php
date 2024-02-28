<?php

namespace App\Http\Livewire\Frontend\Home;

use App\Models\Menu;
use Livewire\Component;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
// use Artesaos\SEOTools\Facades\JsonLdMulti;
use App\Models\Metadetails;
use Illuminate\Support\Facades\Route;
// OR use only single facades 

use Artesaos\SEOTools\Facades\SEOTools;
class Homepage extends Component
{

    public $sliders,$seo_keywords ;

    public function mount(){
        
        $getRouteName =  Route::currentRouteName(); 
        $seoMetaData =  Metadetails::where('name',$getRouteName )->first();   
        SEOMeta::setTitle($seoMetaData->title ?? 'Home ');
        SEOMeta::setDescription($seoMetaData->description ?? '');
        SEOMeta::setCanonical(url()->current());
         $keywords = $seoMetaData->keywords ?? '';
        SEOMeta::addKeyword( $keywords);
        
        OpenGraph::setTitle($seoMetaData->title ?? '');
        OpenGraph::setDescription($seoMetaData->description ?? '');
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'website');
        
        SEOTools::twitter()->setSite($seoMetaData->title ?? '');
        TwitterCard::setTitle($seoMetaData->title ?? '');
        TwitterCard::setSite('@Shiva International Residential School');
       
        }

    public function render()
    {
    return view('livewire.frontend.home.homepage')->layout('layouts.frontend');
    }
}
