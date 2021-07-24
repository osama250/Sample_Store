<?php

  namespace App\Traits;

  trait UploadImg {

    public function upload_photo($photo , $dist) {

        $extention    = $photo->getClientOriginalExtension();
        $filename     = time() . '.' . $extention;
        $path         = $dist;
        $photo->move($path,$filename);
        return $filename;
  }

}
