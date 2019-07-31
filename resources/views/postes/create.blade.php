<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8mb4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>

<body>
<h1>Create a new Post</h1>
<!-- creating the form to be ale to post -->
<form action="/home/{usere}/create" method="post">
    @csrf

    <!-- For the title -->

    <div class='container'>
        <label for="title" class="label">Post Title</label>
        <input type="string" name='title' value="{{old('title')}}">
    </div>

<!-- For the message -->

    <div class="container is-fluid">
    <label for="message" class="text">Insert your message</label>
    <textarea type="areatext" class="areatext" name='message'value="{{old('message')}}"></textarea>
    </div>

    <div class="container is-fluid">
    

    <!-- For the Privacy setting -->
    <table>
    <input type="radio" name="privacy" value="True" /> Private
    <input type="radio" name="privacy" value="False" /> Public
    </table>
</div>
  
<div class="container is-fluid">
    

<!-- For the comments -->
    <table>
    <input type="radio" name="comments" value="True" /> Allow Comment
    <input type="radio" name="comments" value="False" /> Disable comments
    </table>
</div>


<!-- submit button -->
    <div class="container is-fluid">


    
    <button type="submit" class='button is-link'></button>Create Post</button>

    </div>
   
</div>

<li>
<ul>
        <a href="/home/{user}/index">View Posts</a>   
</ul>
</li>
<ul>
        
        <a href="/home">Home</a>
</ul>
</form>
</body>

</html>