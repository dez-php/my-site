<div style="background-color: #f5aab5; padding: 10px;">
    <h1><?=__FILE__?></h1>
    <a href="<?= $url->create( 'index:hello' ) ?>">hello</a>
    <a href="<?= $url->create( 'source:item', [
        'hash'  => md5( rand( 1, 100000 ) )
    ] ) ?>">source</a>
</div>