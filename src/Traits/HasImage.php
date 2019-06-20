<?php

namespace UbitCorp\Imageable\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasImage
{
    public function image(): MorphOne
    { 
        return $this->morphOne(
            \UbitCorp\Imageable\Entities\Image::class,
            'model'
        );
    }

    public function images(): MorphMany
    { 
        return $this->morphMany(
            \UbitCorp\Imageable\Entities\Image::class,
            'model'
        );
    }

    /*
    public function addSetting($keyword, $value)
    {
        $keyword = trim($keyword);
        $value = trim($value);

        try {
            $this->settings()->create([
                "keyword" => $keyword,
                "value" => $value,
            ]);

        } catch (\Illuminate\Database\QueryException $e) {

          $errorCode = $e->errorInfo[1];
          if($errorCode == '1062'){
            $this->settings()->where("keyword",$keyword)->update([
              "value" => $value,
            ]);  
          }

        }
    }

    public function addSettings($settings){
      if(!is_array($settings))
        return;

      foreach($settings as $keyword=>$value){
        $this->addSetting(trim($keyword), trim($value));
      }
    }

    public function removeSetting($keyword){
      $this->settings()->where('keyword', trim($keyword))->delete();

      $this->load('settings');
    }

    public function removeSettings($keywords){
      $keyword = trim($keyword);

      if(!is_array($keywords))
        return $this->removeSetting($keywords);
      
      $this->settings()->whereIn('keyword', $keywords)->delete();


      $this->load('settings');
    }    
 
    
    public function syncSettings($settings){
      if(!is_array($settings))
        return;

      $this->settings()->delete();
      $this->addSettings($settings);

      $this->load('settings');
    }

    public function valueOfSetting($keyword){
      //loads all settings first and then use same collection every time.
      $result =  $this->settings->firstWhere('keyword', trim($keyword));
      
      if($result)
        return trim($result->value);

      return null;
      
    }

    public function valueOfSettingAsArray($keyword){
      if($this->valueOfSetting($keyword))
          return array_map("trim",explode(",",$this->valueOfSetting($keyword)));
        
       return null;
    }   
    
    */

}
