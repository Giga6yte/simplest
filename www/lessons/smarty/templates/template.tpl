<!DOCTYPE html>

{*1. Моно заливка
<html lang="en">
    <head>
        <title>{$title}</title>
        <meta name="author" content="{$autor}">
    </head>
    <body>
        <div>
            <h1>{$title}</h1>
        </div>
        <div>
            <h1>{$author}</h1>
        </div>
        <div>
            <h1>{$text}</h1>
        </div>
    </body>
</html>
end 1.*}

<html lang="en">
    <head>
        <title>{$data.title}</title>
        <meta name="author" content="{$data.autor}">
    </head>
    <body>
        <div>
            <h1>{$data.title}</h1>
        </div>
        <div>
            <h1>{$data.author}</h1>
        </div>
        <div>
            <h1>{$data.text}</h1>
        </div>
        {foreach from=$data.p key=k item=v}
            <div>
                <h1>{$k} -> {$v}</h1>
            </div>
        {/foreach}
    </body>
</html>