<?php

require_once ('db.php');

Class pemesanan 
{
    
    public function show()
    {
        $data = new pemesanan;
        $data = $this->db->prepare("SELECT * FROM pemesanan");
       
        
         try 
                {
                   
                     $data->execute(); 
                     $result = $data->fetchAll();
                } 
            catch(PDOException $e)
                {
                    
                    print_r($e->getMessage());
                }
                
        return $result;
        
    }
    
    public function store($id_pemesanan, $id_pegawai, $id_calon_konsumen, $id_penawaran, $tgl_pemesanan, $status_pemesanan, $alamat_pengiriman, $total_harga)
    {
        
        $data = $this->db->prepare('INSERT INTO pemesanan (id_pemesanan, id_pegawai, id_calon_konsumen, id_penawaran, tgl_pemesanan, status_pemesanan, alamat_pengiriman, total_harga) VALUES (?, ?, ?, ?, ?, ?, ?, ?)');
        
        $data->bindParam(1, $id_pemesanan);
        $data->bindParam(2, $id_pegawai);
        $data->bindParam(3, $id_calon_konsumen);
        $data->bindParam(4, $id_penawaran);
        $data->bindParam(5, $tgl_pemesanan);
        $data->bindParam(6, $status_pemesanan);
        $data->bindParam(7, $alamat_pengiriman);
        $data->bindParam(8, $total_harga);
        
       
            try 
                {
                     $result = $data->execute(); 
                } 
            catch(PDOException $e)
                {
                    
                    print_r($e->getMessage());
                }
        
        
        return print_r($result);
    }
    
    public function showById($id)
    {
        $data = $this->db->prepare("SELECT * FROM pemesanan where id_pemesanan='$id'");
        
         try 
                {
                     $data->execute(); 
                     $result = $data->fetchAll();
                } 
            catch(PDOException $e)
                {
                    
                    print_r($e->getMessage());
                }
        
        return $result;
    }
 
    public function update($id_pemesanan, $id_pegawai, $id_calon_konsumen, $id_penawaran, $tgl_pemesanan, $status_pemesanan, $alamat_pengiriman, $total_harga) {
        $data = $this->db->prepare('UPDATE pemesanan set  id_pemesanan=?, id_pegawai=?, id_calon_konsumen=?, id_penawaran=?, tgl_pemesanan=?, status_pemesanan=?, alamat_pengiriman=?, total_harga=? where id_pemesanan=?');
        
        
        $data->bindParam(1, $id_pemesanan);
        $data->bindParam(2, $id_pegawai);
        $data->bindParam(3, $id_calon_konsumen);
        $data->bindParam(4, $id_penawaran);
        $data->bindParam(5, $tgl_pemesanan);
        $data->bindParam(6, $status_pemesanan);
        $data->bindParam(7, $alamat_pengiriman);
        $data->bindParam(8, $total_harga);
 
        try 
                {
                     $result = $data->execute(); 
                } 
            catch(PDOException $e)
                {
                      print_r($e->getMessage());
                }
                
        return print_r($result);
    }
 
    public function delete($id)
    {
        $data = $this->db->prepare("DELETE FROM pemesanan where id_pemesanan=?");
 
        $data->bindParam(1, $id);
 
        try 
                {
                     $result = $data->execute(); 
                } 
            catch(error $e)
                {
                    print_r($e->getMessage());
                }
                
        return print_r($result);
    }
 
}

