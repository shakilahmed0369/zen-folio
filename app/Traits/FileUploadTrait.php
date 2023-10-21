<?php
namespace App\Traits;

use Illuminate\Http\Request;
use File;

trait FileUploadTrait
{
    public function fileUpload(Request $request, string $filedName, string $oldPath = null, string $path = 'uploads') : ?string
    {
        if($request->has($filedName)) {
            $file = $request->{$filedName};
            $customName = uniqid().'.'.$file->getClientOriginalExtension();

            // Upload the file with the custom name
            $file->move($path, $customName);
            $this->deleteFile($oldPath);

            return $path.'/'.$customName;
        }

        return null;
    }

    public function MultiFileUpload(Request $request, string $filedName, string $path = 'uploads') : ?array
    {
        if($request->has($filedName)) {

            $files = $request->{$filedName};
            $paths = [];

            foreach ($files as $file) {
                $customName = uniqid().'.'.$file->getClientOriginalExtension();
                // Upload the file with the custom name
                $file->move($path, $customName);

               $paths[] = $path.'/'.$customName;
            }

            return $paths;

        }

        return null;
    }

    function deleteFile($path) : void
    {
        if(File::exists($path)) {
            File::delete($path);
        }
    }
}
