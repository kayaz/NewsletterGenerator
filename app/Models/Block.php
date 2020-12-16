<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as ImageManager;

class Block extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mailing_blocks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mailing_id',
        'name',
        'cell_1',
        'cell_2',
        'cell_3',
        'cell_1_url',
        'cell_2_url',
        'cell_3_url',
        'cell_1_bgcolor',
        'cell_2_bgcolor',
        'cell_3_bgcolor',
        'order'
    ];

    public function sort($array)
    {
        $updateRecordsArray = $array->get('recordsArray');
        $listingCounter = 1;
        foreach ($updateRecordsArray as $recordIDValue) {
            $entry = self::find($recordIDValue);
            $entry->order = $listingCounter;
            $entry->save();
            $listingCounter = $listingCounter + 1;
        }
    }

    public function imageUpload($file, int $width, int $height, $cell, $old_file = null)
    {

        if($cell == 'cell_1' && $old_file->cell_1) {
            $old_img = public_path('/uploads/' . $old_file->cell_1);
            if (file_exists($old_img)) {
                unlink($old_img);
            }
        }
        if($cell == 'cell_2' && $old_file->cell_2) {
            $old_img = public_path('/uploads/' . $old_file->cell_2);
            if (file_exists($old_img)) {
                unlink($old_img);
            }
        }
        if($cell == 'cell_3' && $old_file->cell_3) {
            $old_img = public_path('/uploads/' . $old_file->cell_3);
            if (file_exists($old_img)) {
                unlink($old_img);
            }
        }

        $name = Str::slug($file->getClientOriginalName(), '-') . '_' . Str::random(3) . '.' .$file->getClientOriginalExtension();
        $file->storeAs('/', $name, 'public_uploads');

        $filepath = public_path('/uploads/' . $name);
        ImageManager::make($filepath)->fit($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        })->save($filepath);

        $this->update([$cell => $name]);
    }
}
