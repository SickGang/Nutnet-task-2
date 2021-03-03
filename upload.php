<?php
require  'vendor/autoload.php';
require 'query.php';
use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/mysecret.json');
/*  SEND TO GOOGLE SHEETS */
$client = new Google_Client;
try{
    $client->useApplicationDefaultCredentials();
    $client->setApplicationName("Something to do with my representatives");
    $client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);
    if ($client->isAccessTokenExpired()) {
        $client->refreshTokenWithAssertion();
    }

    $accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
    ServiceRequestFactory::setInstance(
        new DefaultServiceRequest($accessToken)
    );
    // Get our spreadsheet
    $spreadsheet = (new Google\Spreadsheet\SpreadsheetService)
        ->getSpreadsheetFeed()
        ->getByTitle('Test');

    // Get the first worksheet (tab)
    $worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
    $worksheet = $worksheets[0];


    $listFeed = $worksheet->getListFeed();
    foreach ($res as $item) {
        $listFeed->insert([
            'name' => $item['name'],
            'surname' => $item['surname'],
            'age' => $item['age']
        ]);
    }


}catch(Exception $e){
    echo $e->getMessage() . ' ' . $e->getLine() . ' ' . $e->getFile() . ' ' . $e->getCode;
}

/*  SEND TO GOOGLE SHEETS */
