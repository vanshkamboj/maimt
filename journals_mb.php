<?php

$path = './Journals/Management Journals';

if (isset($_GET['path'])) {
    $path .= "/" . urldecode($_GET['path']);
}

if (!is_dir($path)) {
    header('Location: jaurnal.php');
}

$dir = new DirectoryIterator($path);

include("header.html");
?>

<div class="container-fluid">
    <h2 class="text-center mt-5">Management Journals</h2>
    <table class="table table-bordered table-hover my-5">
        <thead>
            <tr>
                <th>Title</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dir as $fileinfo) {
                if (!$fileinfo->isDot()) {
                    $dirName = $fileinfo->getFilename();
                    if ($fileinfo->isDir()) {
                        $dirName = explode('_', $dirName);
                        $dirName = array_map('ucfirst', $dirName);
                        $dirName = implode(" ", $dirName);
                        $encodedName = isset($_GET['path']) ? $_GET['path'] . '/' . urlencode($fileinfo->getFilename()) : urlencode($fileinfo->getFilename());
                        echo  "<tr>
                <td><a href=\"journals_mb.php?path={$encodedName}\">$dirName</td>
                </tr>";
                    } else {
                        if ($fileinfo->getFilename() != 'index.php') {
                            echo  "<tr>
                <td><a href=\"{$path}/{$dirName}\" target=\"_blank\">$dirName</td>
                </tr>";
                        }
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>
<?php
include("footer.html");
?>