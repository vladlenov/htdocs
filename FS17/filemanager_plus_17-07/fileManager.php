<?php
/**
 * @param $name
 * @return mixed
 */
function extensionExtractor($name)
{
    $extParts = explode(".", $name);
    return end($extParts);
}

if (!empty($_GET['path'])) {
    $dir = $_GET['path'];
} else {
    $dir = __DIR__; //волшебная константа, возвращает директорию текущего файла (равносильно dirname(__FILE__))
}
ini_set("display_errors", 1);
if (!empty($_FILES)) {
    foreach ($_FILES as $file) {
        //print_r($file);

        $extension = extensionExtractor($file['name']);
        $fileName = md5(microtime() . rand(0, 1000)) . '.' . $extension;
        copy($file['tmp_name'], $dir . DIRECTORY_SEPARATOR . $fileName);
        unlink($file['tmp_name']);
    }
}

ini_set("display_errors", 1);


if ((stripos($dir, __DIR__) === false)) {
    header("Location: " . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . "/" . $_SERVER['SCRIPT_NAME']);
}

$htmlData = $lastDownloaded = [];
$counter = 0;
foreach (scandir($dir) as $fileName) {
    if ($fileName == '.') continue; // одна точка - текущий каталог
    $counter++;
    if (is_dir($dir . DIRECTORY_SEPARATOR . $fileName)) { //является ли папкой
        $path = $dir . DIRECTORY_SEPARATOR . $fileName; //формируем ссылку на папку для перехода
        if ($fileName == '..') { // две точки - родительский каталог
            $fileParts = explode(DIRECTORY_SEPARATOR, $dir);
            array_pop($fileParts);
            $path = implode(DIRECTORY_SEPARATOR, $fileParts); // ссылка на переход на уровень выше
        }
        $htmlData[$counter]['extension'] = "folder"; //
        $htmlData[$counter]['url'] = "?path=" . $path;// ? разделяет URL от параметров, ключ?значение,
    } else {
        $htmlData[$counter]['extension'] = extensionExtractor($fileName);
    }
    $htmlData[$counter]['name'] = $fileName;
    // size Filessoze
    // время last update time
    $htmlData[$counter]['fullPath'] = $dir . DIRECTORY_SEPARATOR . $fileName;
}
if (isset($_COOKIE['arrayTop'])) {
    $lastDownloaded = json_decode($_COOKIE['arrayTop']);
}

?>
<form align="center" action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Save">
</form>
<link rel="stylesheet" type="text/css" href="filemanager.css">
<table>
    <tr>
        <th>Path</th>
        <th>Data</th>
    </tr>
    <?php foreach ($htmlData as $element) { ?>
    <tr>
        <td width="200px">
            <div class="fileIcon <?= $element['extension'] ?>"></div>
            <?php if (isset($element['url'])) { ?>
                <a href="<?= $element['url'] ?>"><?= $element['name'] ?></a>
            <?php } else { ?>
            <span><?= $element['name'] ?></span>
        <td><a href="filemanager_download.php?file=<?= $element['fullPath'] ?>">download</a> <?php } ?>
            <br>
            <?php }; ?>
</table>

<table>
    <tr>
        <th>Last downloaded</th>
    </tr>
    <?php foreach ($lastDownloaded as $element) { ?>
    <tr>
        <td>

            <span><?= $element ?></span>
            <?php }; ?>
</table>
