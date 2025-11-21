
<?php
class Mahasiswa {
    private $nama;
    private $nim;
    private $alamat;
    private $umur;
    private $jurusan;

    // Constructor fleksibel
    public function __construct($nama, $nim, $alamat = null, $umur = null, $jurusan = null) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->alamat = $alamat;
        $this->umur = $umur;
        $this->jurusan = $jurusan;
    }

    // Getter
    public function getNIM(): mixed {
        return $this->nim;
    }

    public function getNama(): mixed {
        return $this->nama;
    }

    public function getAlamat(): mixed {
        return $this->alamat;
    }

    // Setter
    public function setNama($nama): void {
        $this->nama = $nama;
    }

    public function setNIM($nim): void {
        $this->nim = $nim;
    }

    public function setAlamat($alamat): void {
        $this->alamat = $alamat;
    }

    // Method cetak informasi
    public function cetakInformasi(): void {
        echo "NIM mahasiswa {$this->nim} adalah {$this->nama}\n";
    }
}
