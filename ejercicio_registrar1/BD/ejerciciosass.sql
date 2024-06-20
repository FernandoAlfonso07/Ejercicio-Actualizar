select * from tb_usuario;

select nombre from tb_usuario where documento = '12121';
select fec_nac from tb_usuario where documento = '12121';
SELECT foto FROM tb_usuario WHERE documento = '12121';


update tb_usuario 
set documento = '',
nombre = '',
fec_nac = '',
foto= '',
contraseña = ''
where documento = '12121';