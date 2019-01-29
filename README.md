# Map
---
## Controllers
- PagesController
- PostsController
---
## Views
### pages
- Index
- portfolio
### include
- messages
- navbar
### layouts
- app
### posts
- create
- edit
- index
- show
---
## routes/web.php
```php
Route::get('/',  'PagesController@index');

Route::get('/portfolio', 'PagesController@portfolio');

Route::resource('blog', 'PostsController'); 
```
## PagesController
```php
public function index() {
        return view('pages.index'); 
    }

    public function portfolio() {
        return view('pages.portfolio');
    }
```
---
# Posts Controller
## store
```php
public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'background' => 'required',
            'body' => 'required'
        ]);

        // Create Post
        $post = new Post;
        $post->title  = $request->input('title');
        $post->background = $request->input('background');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/blog')->with('success', 'Post Created');
    }
```
## show
```php
public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }
```
## edit
```php
public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }
```
## update
```php
public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'background' => 'required',
            'body' => 'required'
        ]);

        // Create Post
        $post = Post::find($id);
        $post->title  = $request->input('title');
        $post->background = $request->input('background');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/blog')->with('success', 'Post Updated');
    }
```
## destroy
```php
public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/blog')->with('success', 'Post Updated');
    }
```
