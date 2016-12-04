/*CONSULTAS SQL*/

/*a)*/  select distinct p.morada,p.codigo_espaco from posto p where not exists (select a.morada,a.codigo from aluga a where a.morada=p.morada and a.codigo=p.codigo_espaco);
/*b)*/	Select morada from(select a.morada,count(numero) as NumeroReservas from aluga a group by a.morada) as tab where tab.NumeroReservas  > (select avg(NumeroReservas) from (select a.morada,count(numero) as NumeroReservas from aluga a group by a.morada) as Tabela1);
/*c)*/	select distinct nif from (arrenda natural join fiscaliza) where nif in(select nif from arrenda a,fiscaliza f where a.morada=f.morada and a.codigo= f.codigo group by f.morada,f.codigo having COUNT(distinct id)=1);
/*d)*/	select (sum(dias)*tarifa)as TarifaTotal, morada,codigo from (select datediff(data_fim,data_inicio)as dias,morada,codigo,tarifa from oferta)as tab1 group by morada,codigo;
/*e)*/	select codigo_espaco from(select count(morada) as conta1, morada,codigo_espaco from posto natural join aluga group by morada) as Tab1,(select count(morada) as conta2, morada from posto group by morada) as Tab2  where Tab1.conta1=Tab2.conta2;
