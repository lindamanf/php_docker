<?php
class User {
    public function importCsv($file) {
        $data = $this->readCsv($file);
        $importedData = array_filter(array_map("convertRowData", $data));
        $this->updateModel($importedData);
    }

    private function convertRowData($row) {
        $year = $row[0];
        $month = $row[1];
        $userId = $row[2];

        $user = User::find($userId);
        if (!$user) {
            $this->appendError('User not found.');
            return null;
        }

        // there are many codes here
        //   .
        //   .
        //   .

        $this->getImportedData($year, $month, $user->getId());
    } 
}
?>
