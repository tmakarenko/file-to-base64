<?php

namespace classes\Services;

class FileService
{
    private $fileDir;

    /**
     * FileService constructor.
     * @param string $fileDir
     */
    public function __construct($fileDir = './uploads/')
    {
        $this->fileDir = $fileDir;
    }

    /**
     * @param string $fileName
     * @return string
     * @throws Exception
     */
    public function encodeFileToBase64(string $fileName): string
    {
        $contentEncoded = '';
        $content = file_get_contents($this->fileDir . $fileName);
        $contentEncoded = base64_encode($content);
        return $contentEncoded;
    }

    /**
     * @param string $base64Str
     * @return string
     */
    public function decodeFileFromBase64(string $base64Str): string
    {
        $decodedContent = base64_decode($base64Str);
        file_put_contents('./uploads/3.jpg', $decodedContent);
        return '';
    }

    public function saveFile()
    {

    }
}
