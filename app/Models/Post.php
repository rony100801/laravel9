<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['search']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')->orWhere('body', 'like', '%' . $filters['search'] . '%');
        // }

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')->orWhere('body', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        $query->when($filters['author'] ?? false, fn ($query, $author) => $query->whereHas('author', fn ($query) => $query->where('username', $author)));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}

// \App\Models\Post::create([
//     'title' => 'Postingan Ketiga',
//     'category_id' => 3,
//     'slug' => 'postingan-ketiga',
//     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic vitae quam minima debitis, minus libero velit ex! Officiis animi soluta rem impedit nesciunt modi dolorem repellendus, praesentium excepturi cumque adipisci!',
//     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum ullam exercitationem ex qui commodi animi vitae totam nostrum quasi officiis?</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, pariatur deserunt, perferendis iure quisquam omnis iste dolore vel temporibus alias sint saepe eveniet quia impedit quos autem, maxime aspernatur animi. In obcaecati, similique saepe soluta rem nam ab quibusdam, dolor expedita at nihil excepturi asperiores unde labore exercitationem placeat. Itaque.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae explicabo aperiam rem amet mollitia velit similique et! Delectus, dolores libero aliquid totam maiores minus obcaecati eaque quasi animi dicta, dolor, nostrum consequatur nobis ducimus itaque recusandae rem placeat amet blanditiis sed atque et tenetur maxime consequuntur! Deleniti laborum minus quam, odit vitae modi nobis nam amet perspiciatis reprehenderit id ipsum sapiente rem obcaecati saepe nihil aspernatur? Placeat dolores suscipit dolorum!</p>'
// ])

// \App\Models\Category::create([
//     'name' => 'Personal',
//     'slug' => 'personal'
// ])
