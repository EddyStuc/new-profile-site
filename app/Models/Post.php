<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;
use League\CommonMark\CommonMarkConverter;
use League\CommonMark\Environment;
use League\CommonMark\Extension\Attributes\AttributesExtension;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post extends Model
{
    use HasFactory;

    public $filenames;
    public $filesystem;

    public function __construct() {
        $this->filenames = collect(File::allFiles(resource_path('posts')))
            ->sortByDesc(function ($file) {
                return $file->getBaseName();
            })
            ->map(function ($file) {
                return $file->getBaseName();
            });

            $this->filesystem = new Filesystem();
    }

    public function getLatest($limit)
    {
        $posts = [];

        foreach ($this->filenames->take($limit) as $filename) {
            $posts[] = $this->getPostData($filename);
        }

        return collect($posts);
    }

    public function getPostData($filename)
    {
        $file = $this->filesystem->get(resource_path('posts/' . $filename));
        $object = YamlFrontMatter::parse($file);

        $post['meta'] = $object->matter();
        $post['slug'] = str_replace('.md', '', $filename);

        $environment = Environment::createCommonMarkEnvironment();
        $environment->addExtension(new AttributesExtension());
        $converter = new CommonMarkConverter([], $environment);

        $post['title'] = $object->title;
        $post['published'] = date("F j, Y", $object->published);
        $post['body'] = $converter->convertToHtml($object->body());

        return $post;
    }
}
