<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use League\CommonMark\MarkdownConverterInterface;

class Foo extends Model
{
    use HasFactory;

    protected $converter;

    public function __construct(MarkdownConverterInterface $converter) {
        $this->converter = $converter;
    }

    public function bar()
    {
        return $this->converter->convertToHtml('hello');
    }
}

App::make('Foo')->bar();
