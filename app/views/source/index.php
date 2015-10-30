<h2>Add new source</h2>
<p>
<form action="<?= $url->path( 'source/index' ) ?>" method="post">

    <label>
        Title
        <input name="name" type="text">
    </label>

    <label>
        Language
        <select name="language">
            <option value="php">PHP</option>
            <option value="css">CSS</option>
            <option value="html">HTML</option>
            <option value="js">JS</option>
        </select>
    </label>

    <label>
        Source
        <textarea name="content"></textarea>
    </label>

    <label>
        <input type="submit" value="Add" class="success">
        <input type="reset" value="Clear data" class="gray">
    </label>

</form>
</p>