<!doctype html>
<html lang="en">
<?php require("templates/header.php");
$commands = [
    [
        'name' => 'gb.help',
        'usage' => 'gb.help [command]',
        'desc' => 'Your average help command',
        'example' => ''
    ],
    [
        'name' => 'gb.quote',
        'usage' => 'gb.quote',
        'desc' => 'Get a random quote from <br /><a target="_blank" href="http://totallycorrectdannyphantomquotes.tumblr.com/">http://totallycorrectdannyphantomquotes.tumblr.com/</a>',
        'example' => ''
    ],
    [
        'name' => 'gb.goingghost',
        'usage' => 'gb.goingghost',
        'desc' => 'Screams "going ghost" in the voice channel that you are in <br />(has a 5% chance of becoming ghostly)',
        'example' => ''
    ],
    [
        'name' => 'gb.wail',
        'usage' => 'gb.wail',
        'desc' => 'Gives you a nice ghostly wail',
        'example' => ''
    ],
    [
        'name' => 'gb.fuitloop',
        'usage' => 'gb.fuitloop',
        'desc' => 'You\'re one crazed up fruitloop',
        'example' => ''
    ],
    [
        'name' => 'gb.doppelganger',
        'usage' => 'gb.doppelganger [page:number/chapter:number]',
        'desc' => 'Read the doppelganger comic within discord (comic website: <a href="http://doppelgangercomic.tumblr.com/" 
target="_blank">http://doppelgangercomic.tumblr.com</a>)',
        'example' => 'gb.doppelganger page:20<br />db.doppelganger chapter:1'
    ],
    [
        'name' => 'gb.image',
        'usage' => 'gb.image',
        'desc' => 'Gives you a random Danny Phantom related image from google',
        'example' => ''
    ],
    [
        'name' => 'gb.gif',
        'usage' => 'gb.gif',
        'desc' => 'Gives you a random Danny Phantom gif',
        'example' => ''
    ],
    [
        'name' => 'gb.wiki',
        'usage' => 'gb.wiki [search term]',
        'desc' => 'Search the Danny Phantom wiki',
        'example' => 'gb.wiki Wes Weston'
    ],
    [
        'name' => 'gb.wikiuser',
        'usage' => 'gb.wikiuser &lt;username/user id&gt;',
        'desc' => 'Search the Danny Phantom wiki',
        'example' => 'gb.wikiuser duncte123<br/>gb.wikiuser 34322457'
    ],
    [
        'name' => 'gb.about',
        'usage' => 'gb.about',
        'desc' => 'Gives some information about the bot',
        'example' => ''
    ],
    [
        'name' => '',
        'usage' => '',
        'desc' => '',
        'example' => ''
    ],

];
?>
<body>
<main>
    <div class="container">
        <div class="row col s12 spoopy-font">
            <h3>Commands</h3>
            <br/>
        </div>
        <div class="row col s12">
            <div class="main-area">
                <p>Here is a more detailed description of all the commands.</p>
                <table>
                    <thead>
                    <tr>
                        <th>Command</th>
                        <th>Usage</th>
                        <th>Description</th>
                        <th>Examples</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($commands as $command): ?>
                        <tr>
                            <td><?php echo $command['name'];?></td>
                            <td><?php echo $command['usage'];?></td>
                            <td><?php echo $command['desc'];?></td>
                            <?php if(!empty($command['example'])) {
                                echo "<td>$command[example]</td>";
                            } ?>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</main>
<?php require("templates/footer.html"); ?>
</body>
</html>
