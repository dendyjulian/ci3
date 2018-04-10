<?php
class Personaldata extends CI_Model{
	public function getData(){
		$data = array(
			'nama' => "Welcome To My Website <strong>Dendy</strong> From Wakanda.",
			'tentang' => "<p class='generic-p'>
              Perkenalkan nama saya Dendy Julian Maulana.<br>
              Dari Malang lahir pada tanggal 08 Juli 1998. <br>
              Anak Pertama dari kedua bersaudara.<br>
            </p>",
			'artikel' => "
			  <p class='generic-p'>
			  Tak terasa gelap pun jatuh<br>
              Di ujung malam menuju pagi yang dingin<br>
              Hanya ada sedikit bintang malam ini<br>
              Mungkin karena kau sedang cantik-cantiknya.
              </p>

              <p class=generic-p'>
              Lalu mataku merasa malu<br>
              Semakin dalam ia malu kali ini<br>
              Kadang juga ia takut<br>
              Tatkala harus berpapasan di tengah pelariannya.
              </p>

              <p class='generic-p'>
              Di malam hari menuju pagi<br>
              Sedikit cemas banyak rindunya.<br>
              </p>"
		);
		return $data;
	}	
}
?>