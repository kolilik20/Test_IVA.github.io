<?php
class Pasien
{
    /**
     *
     */
    public function __construct()
    {
    }

    /**
     *
     */
    public function __destruct()
    {
    }
    
    /**
     * Set friendly columns\' names to order tables\' entries
     */
    public function setOrderingValues()
    {
        $ordering = [
            'id' => 'ID',
            'nama' => 'Nama',
            'umur' => 'Umur',
            'gender' => 'Gender',
            'periksa' => 'Periksa',
            'kelurahan'=>'Kelurahan',
            'keterangan' => 'keterangan',
            'created_at' => 'Created at',
            'updated_at' => 'Updated at'
            ];

        return $ordering;
    }
}
?>
