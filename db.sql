alter table rujukan
add column nomorRujukan varchar(100);

alter table dokter
add column spesialis varchar(100);

alter table rujukan
add column keteranganRujukan varchar(255);

alter table rujukan
add column rsRujukan varchar(100);

-- rev 2
alter table pasien
add pemeriksa varchar(100);
alter table kode_obat
add column stok varchar(100);
alter table kode_obat
add column status_persediaan varchar(100);
