<?php
$mysql_server_name = 'localhost';
$mysql_username = 'root';
$mysql_password = 'root';
$mysql_database = 'P0008';
$conn = new mysqli($mysql_server_name, $mysql_username, $mysql_password);
$conn->close();

$xml = new XMLWriter();
$xml->openUri('rss.xml');
$xml->setIndentString('    ');
$xml->setIndent(true);
$xml->startDocument('1.0', 'utf-8');
# TODO: Add `xml-stylesheet`.

$xml->startElement('rss');
$xml->writeAttribute('version', '2.0');

$xml->startElement('channel');

$xml->startElement('title');
$xml->writeCdata('');
$xml->endElement();  # title

$xml->startElement('description');
$xml->writeCdata('');
$xml->endElement();  # title

$xml->writeElement('link');
$xml->writeElement('language', 'zh-cn');
$xml->writeElement('generator', end(explode('/', $_SERVER['PHP_SELF'])));
$xml->writeElement('ttl', '100');

$xml->endElement();  # channel

$xml->endElement();  # rss

echo '<h1>Finished.</h1>';