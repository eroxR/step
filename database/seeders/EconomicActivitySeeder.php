<?php

namespace Database\Seeders;

use App\Models\economic_activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EconomicActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $actividadEconomica1 = new economic_activity();
        $actividadEconomica1->EconomicActivity_number=10;
        $actividadEconomica1->description_EconomicActivity="Asalariados.";
        $actividadEconomica1->save();
        
        $actividadEconomica2 = new economic_activity();
        $actividadEconomica2->EconomicActivity_number=11;
        $actividadEconomica2->description_EconomicActivity="Cultivos agrícolas transitorios.";
        $actividadEconomica2->save();
        
        $actividadEconomica3 = new economic_activity();
        $actividadEconomica3->EconomicActivity_number=12;
        $actividadEconomica3->description_EconomicActivity="Cultivos agrícolas permanentes.";
        $actividadEconomica3->save();
        
        $actividadEconomica4 = new economic_activity();
        $actividadEconomica4->EconomicActivity_number=13;
        $actividadEconomica4->description_EconomicActivity="Propagación de plantas (actividades de los viveros, excepto viveros forestales)";
        $actividadEconomica4->save();
        
        $actividadEconomica5 = new economic_activity();
        $actividadEconomica5->EconomicActivity_number=14;
        $actividadEconomica5->description_EconomicActivity="Ganadería.";
        $actividadEconomica5->save();
        
        $actividadEconomica6 = new economic_activity();
        $actividadEconomica6->EconomicActivity_number=15;
        $actividadEconomica6->description_EconomicActivity="Explotación mixta (agrícola y pecuaria).";
        $actividadEconomica6->save();
        
        $actividadEconomica7 = new economic_activity();
        $actividadEconomica7->EconomicActivity_number=16;
        $actividadEconomica7->description_EconomicActivity="Actividades de apoyo a la agricultura y la ganadería, y actividades posteriores a la cosecha.";
        $actividadEconomica7->save();
        
        $actividadEconomica8 = new economic_activity();
        $actividadEconomica8->EconomicActivity_number=17;
        $actividadEconomica8->description_EconomicActivity="Caza ordinaria y mediante trampas y actividades de servicios conexas.";
        $actividadEconomica8->save();
        
        $actividadEconomica9 = new economic_activity();
        $actividadEconomica9->EconomicActivity_number=20;
        $actividadEconomica9->description_EconomicActivity="Pensionados.";
        $actividadEconomica9->save();
        
        $actividadEconomica10 = new economic_activity();
        $actividadEconomica10->EconomicActivity_number=21;
        $actividadEconomica10->description_EconomicActivity="Silvicultura y otras actividades forestales.";
        $actividadEconomica10->save();
        
        $actividadEconomica11 = new economic_activity();
        $actividadEconomica11->EconomicActivity_number=22;
        $actividadEconomica11->description_EconomicActivity="Extracción de madera.";
        $actividadEconomica11->save();
        
        $actividadEconomica12 = new economic_activity();
        $actividadEconomica12->EconomicActivity_number=23;
        $actividadEconomica12->description_EconomicActivity="Recolección de productos forestales diferentes a la madera.";
        $actividadEconomica12->save();
        
        $actividadEconomica13 = new economic_activity();
        $actividadEconomica13->EconomicActivity_number=24;
        $actividadEconomica13->description_EconomicActivity="Servicios de apoyo a la silvicultura.";
        $actividadEconomica13->save();
        
        $actividadEconomica14 = new economic_activity();
        $actividadEconomica14->EconomicActivity_number=31;
        $actividadEconomica14->description_EconomicActivity="Pesca.";
        $actividadEconomica14->save();
        
        $actividadEconomica15 = new economic_activity();
        $actividadEconomica15->EconomicActivity_number=32;
        $actividadEconomica15->description_EconomicActivity="Acuicultura.";
        $actividadEconomica15->save();
        
        $actividadEconomica16 = new economic_activity();
        $actividadEconomica16->EconomicActivity_number=46;
        $actividadEconomica16->description_EconomicActivity="Comercio al por mayor y en comisión o por contrata, excepto el comercio de vehículos automotores y motocicletas.";
        $actividadEconomica16->save();
        
        $actividadEconomica17 = new economic_activity();
        $actividadEconomica17->EconomicActivity_number=51;
        $actividadEconomica17->description_EconomicActivity="Extracción de hulla (carbón de piedra).";
        $actividadEconomica17->save();
        
        $actividadEconomica18 = new economic_activity();
        $actividadEconomica18->EconomicActivity_number=52;
        $actividadEconomica18->description_EconomicActivity="Extracción de carbón lignito.";
        $actividadEconomica18->save();
        
        $actividadEconomica19 = new economic_activity();
        $actividadEconomica19->EconomicActivity_number=61;
        $actividadEconomica19->description_EconomicActivity="Extracción de petróleo crudo.";
        $actividadEconomica19->save();
        
        $actividadEconomica20 = new economic_activity();
        $actividadEconomica20->EconomicActivity_number=62;
        $actividadEconomica20->description_EconomicActivity="Extracción de gas natural.";
        $actividadEconomica20->save();
        
        $actividadEconomica21 = new economic_activity();
        $actividadEconomica21->EconomicActivity_number=71;
        $actividadEconomica21->description_EconomicActivity="Extracción de minerales de hierro.";
        $actividadEconomica21->save();
        
        $actividadEconomica22 = new economic_activity();
        $actividadEconomica22->EconomicActivity_number=72;
        $actividadEconomica22->description_EconomicActivity="Extracción de minerales metalíferos no ferrosos.";
        $actividadEconomica22->save();
        
        $actividadEconomica23 = new economic_activity();
        $actividadEconomica23->EconomicActivity_number=81;
        $actividadEconomica23->description_EconomicActivity="Extracción de piedra, arena, arcillas, cal, yeso, caolín, bentonitas y similares";
        $actividadEconomica23->save();
        
        $actividadEconomica24 = new economic_activity();
        $actividadEconomica24->EconomicActivity_number=81;
        $actividadEconomica24->description_EconomicActivity="Personas Naturales sin Actividad Económica";
        $actividadEconomica24->save();
        
        $actividadEconomica25 = new economic_activity();
        $actividadEconomica25->EconomicActivity_number=82;
        $actividadEconomica25->description_EconomicActivity="Extracción de esmeraldas, piedras preciosas y semipreciosas.";
        $actividadEconomica25->save();
        
        $actividadEconomica26 = new economic_activity();
        $actividadEconomica26->EconomicActivity_number=82;
        $actividadEconomica26->description_EconomicActivity="Personas Naturales Subsidiadas por Terceros";
        $actividadEconomica26->save();
        
        $actividadEconomica27 = new economic_activity();
        $actividadEconomica27->EconomicActivity_number=89;
        $actividadEconomica27->description_EconomicActivity="Extracción de otros minerales no metálicos n.c.p.";
        $actividadEconomica27->save();
        
        $actividadEconomica28 = new economic_activity();
        $actividadEconomica28->EconomicActivity_number=90;
        $actividadEconomica28->description_EconomicActivity="Rentistas de Capital, solo para personas naturales.";
        $actividadEconomica28->save();
        
        $actividadEconomica29 = new economic_activity();
        $actividadEconomica29->EconomicActivity_number=91;
        $actividadEconomica29->description_EconomicActivity="Actividades de apoyo para la extracción de petróleo y de gas natural.";
        $actividadEconomica29->save();
        
        $actividadEconomica30 = new economic_activity();
        $actividadEconomica30->EconomicActivity_number=99;
        $actividadEconomica30->description_EconomicActivity="Actividades de apoyo para otras actividades de explotación de minas y canteras";
        $actividadEconomica30->save();
        
        $actividadEconomica31 = new economic_activity();
        $actividadEconomica31->EconomicActivity_number=101;
        $actividadEconomica31->description_EconomicActivity="Procesamiento y conservación de carne, pescado, crustáceos y moluscos.";
        $actividadEconomica31->save();
        
        $actividadEconomica32 = new economic_activity();
        $actividadEconomica32->EconomicActivity_number=102;
        $actividadEconomica32->description_EconomicActivity="Procesamiento y conservación de frutas, legumbres, hortalizas y turbérculo";
        $actividadEconomica32->save();
        
        $actividadEconomica33 = new economic_activity();
        $actividadEconomica33->EconomicActivity_number=103;
        $actividadEconomica33->description_EconomicActivity="Elaboración de aceites y grasas de origen vegetal y animal.";
        $actividadEconomica33->save();
        
        $actividadEconomica34 = new economic_activity();
        $actividadEconomica34->EconomicActivity_number=104;
        $actividadEconomica34->description_EconomicActivity="Elaboración de productos lácteos.";
        $actividadEconomica34->save();
        
        $actividadEconomica35 = new economic_activity();
        $actividadEconomica35->EconomicActivity_number=105;
        $actividadEconomica35->description_EconomicActivity="Elaboración de productos de molinería, almidones y productos derivados del almidón.";
        $actividadEconomica35->save();
        
        $actividadEconomica36 = new economic_activity();
        $actividadEconomica36->EconomicActivity_number=106;
        $actividadEconomica36->description_EconomicActivity="Elaboración de productos de café.";
        $actividadEconomica36->save();
        
        $actividadEconomica37 = new economic_activity();
        $actividadEconomica37->EconomicActivity_number=107;
        $actividadEconomica37->description_EconomicActivity="Elaboración de azúcar y panela.";
        $actividadEconomica37->save();
        
        $actividadEconomica38 = new economic_activity();
        $actividadEconomica38->EconomicActivity_number=108;
        $actividadEconomica38->description_EconomicActivity="Elaboración de otros productos alimenticios.";
        $actividadEconomica38->save();
        
        $actividadEconomica39 = new economic_activity();
        $actividadEconomica39->EconomicActivity_number=109;
        $actividadEconomica39->description_EconomicActivity="Elaboración de alimentos preparados para animales.";
        $actividadEconomica39->save();
        
        $actividadEconomica40 = new economic_activity();
        $actividadEconomica40->EconomicActivity_number=110;
        $actividadEconomica40->description_EconomicActivity="Elaboración de bebidas.";
        $actividadEconomica40->save();
        
        $actividadEconomica41 = new economic_activity();
        $actividadEconomica41->EconomicActivity_number=111;
        $actividadEconomica41->description_EconomicActivity="Cultivo de cereales (excepto arroz), legumbres y semillas oleaginosas.";
        $actividadEconomica41->save();
        
        $actividadEconomica42 = new economic_activity();
        $actividadEconomica42->EconomicActivity_number=112;
        $actividadEconomica42->description_EconomicActivity="Cultivo de arroz.";
        $actividadEconomica42->save();
        
        $actividadEconomica43 = new economic_activity();
        $actividadEconomica43->EconomicActivity_number=113;
        $actividadEconomica43->description_EconomicActivity="Cultivo de hortalizas, raíces y tubérculos.";
        $actividadEconomica43->save();
        
        $actividadEconomica44 = new economic_activity();
        $actividadEconomica44->EconomicActivity_number=114;
        $actividadEconomica44->description_EconomicActivity="Cultivo de tabaco.";
        $actividadEconomica44->save();
        
        $actividadEconomica45 = new economic_activity();
        $actividadEconomica45->EconomicActivity_number=115;
        $actividadEconomica45->description_EconomicActivity="Cultivo de plantas textiles.";
        $actividadEconomica45->save();
        
        $actividadEconomica46 = new economic_activity();
        $actividadEconomica46->EconomicActivity_number=119;
        $actividadEconomica46->description_EconomicActivity="Otros cultivos transitorios n.c.p.";
        $actividadEconomica46->save();
        
        $actividadEconomica47 = new economic_activity();
        $actividadEconomica47->EconomicActivity_number=120;
        $actividadEconomica47->description_EconomicActivity="Elaboración de productos de tabaco.";
        $actividadEconomica47->save();
        
        $actividadEconomica48 = new economic_activity();
        $actividadEconomica48->EconomicActivity_number=121;
        $actividadEconomica48->description_EconomicActivity="Cultivo de frutas tropicales y subtropicales.";
        $actividadEconomica48->save();
        
        $actividadEconomica49 = new economic_activity();
        $actividadEconomica49->EconomicActivity_number=122;
        $actividadEconomica49->description_EconomicActivity="Cultivo de plátano y banano.";
        $actividadEconomica49->save();
        
        $actividadEconomica50 = new economic_activity();
        $actividadEconomica50->EconomicActivity_number=123;
        $actividadEconomica50->description_EconomicActivity="Cultivo de café.";
        $actividadEconomica50->save();
        
        $actividadEconomica51 = new economic_activity();
        $actividadEconomica51->EconomicActivity_number=124;
        $actividadEconomica51->description_EconomicActivity="Cultivo de caña de azúcar.";
        $actividadEconomica51->save();
        
        $actividadEconomica52 = new economic_activity();
        $actividadEconomica52->EconomicActivity_number=125;
        $actividadEconomica52->description_EconomicActivity="Cultivo de flor de corte.";
        $actividadEconomica52->save();
        
        $actividadEconomica53 = new economic_activity();
        $actividadEconomica53->EconomicActivity_number=126;
        $actividadEconomica53->description_EconomicActivity="Cultivo de palma para aceite (palma africana) y otros frutos oleaginosos.";
        $actividadEconomica53->save();
        
        $actividadEconomica54 = new economic_activity();
        $actividadEconomica54->EconomicActivity_number=127;
        $actividadEconomica54->description_EconomicActivity="Cultivo de plantas con las que se preparan bebidas.";
        $actividadEconomica54->save();
        
        $actividadEconomica55 = new economic_activity();
        $actividadEconomica55->EconomicActivity_number=128;
        $actividadEconomica55->description_EconomicActivity="Cultivo de especias y de plantas aromáticas y medicinales.";
        $actividadEconomica55->save();
        
        $actividadEconomica56 = new economic_activity();
        $actividadEconomica56->EconomicActivity_number=129;
        $actividadEconomica56->description_EconomicActivity="Otros cultivos permanentes n.c.p.";
        $actividadEconomica56->save();
        
        $actividadEconomica57 = new economic_activity();
        $actividadEconomica57->EconomicActivity_number=130;
        $actividadEconomica57->description_EconomicActivity="Propagación de plantas (actividades de los viveros, excepto viveros forestales).";
        $actividadEconomica57->save();
        
        $actividadEconomica58 = new economic_activity();
        $actividadEconomica58->EconomicActivity_number=131;
        $actividadEconomica58->description_EconomicActivity="Preparación, hilatura, tejeduría y acabado de productos textiles.";
        $actividadEconomica58->save();
        
        $actividadEconomica59 = new economic_activity();
        $actividadEconomica59->EconomicActivity_number=139;
        $actividadEconomica59->description_EconomicActivity="Fabricación de otros productos textiles.";
        $actividadEconomica59->save();
        
        $actividadEconomica60 = new economic_activity();
        $actividadEconomica60->EconomicActivity_number=141;
        $actividadEconomica60->description_EconomicActivity="Cría de ganado bovino y bufalino.";
        $actividadEconomica60->save();
        
        $actividadEconomica61 = new economic_activity();
        $actividadEconomica61->EconomicActivity_number=141;
        $actividadEconomica61->description_EconomicActivity="Confección de prendas de vestir, excepto prendas de piel.";
        $actividadEconomica61->save();
        
        $actividadEconomica62 = new economic_activity();
        $actividadEconomica62->EconomicActivity_number=142;
        $actividadEconomica62->description_EconomicActivity="Cría de caballos y otros equinos.";
        $actividadEconomica62->save();
        
        $actividadEconomica63 = new economic_activity();
        $actividadEconomica63->EconomicActivity_number=142;
        $actividadEconomica63->description_EconomicActivity="Fabricación de artículos de piel.";
        $actividadEconomica63->save();
        
        $actividadEconomica64 = new economic_activity();
        $actividadEconomica64->EconomicActivity_number=143;
        $actividadEconomica64->description_EconomicActivity="Cría de ovejas y cabras.";
        $actividadEconomica64->save();
        
        $actividadEconomica65 = new economic_activity();
        $actividadEconomica65->EconomicActivity_number=143;
        $actividadEconomica65->description_EconomicActivity="Fabricación de artículos de punto y ganchillo.";
        $actividadEconomica65->save();
        
        $actividadEconomica66 = new economic_activity();
        $actividadEconomica66->EconomicActivity_number=144;
        $actividadEconomica66->description_EconomicActivity="Cría de ganado porcino.";
        $actividadEconomica66->save();
        
        $actividadEconomica67 = new economic_activity();
        $actividadEconomica67->EconomicActivity_number=145;
        $actividadEconomica67->description_EconomicActivity="Cría de aves de corral.";
        $actividadEconomica67->save();
        
        $actividadEconomica68 = new economic_activity();
        $actividadEconomica68->EconomicActivity_number=149;
        $actividadEconomica68->description_EconomicActivity="Cría de otros animales n.c.p.";
        $actividadEconomica68->save();
        
        $actividadEconomica69 = new economic_activity();
        $actividadEconomica69->EconomicActivity_number=151;
        $actividadEconomica69->description_EconomicActivity="Curtido y recurtido de cueros; fabricación de artículos de viaje, bolsos de mano y artículos similares, y fabricación de artículos de talabartería y guarnicionería, adobo y teñido de pieles.";
        $actividadEconomica69->save();
        
        $actividadEconomica70 = new economic_activity();
        $actividadEconomica70->EconomicActivity_number=152;
        $actividadEconomica70->description_EconomicActivity="Fabricación de calzado.";
        $actividadEconomica70->save();
        
        $actividadEconomica71 = new economic_activity();
        $actividadEconomica71->EconomicActivity_number=161;
        $actividadEconomica71->description_EconomicActivity="Actividades de apoyo a la agricultura.";
        $actividadEconomica71->save();
        
        $actividadEconomica72 = new economic_activity();
        $actividadEconomica72->EconomicActivity_number=161;
        $actividadEconomica72->description_EconomicActivity="Aserrado, acepillado e impregnación de la madera.";
        $actividadEconomica72->save();
        
        $actividadEconomica73 = new economic_activity();
        $actividadEconomica73->EconomicActivity_number=162;
        $actividadEconomica73->description_EconomicActivity="Actividades de apoyo a la ganadería.";
        $actividadEconomica73->save();
        
        $actividadEconomica74 = new economic_activity();
        $actividadEconomica74->EconomicActivity_number=162;
        $actividadEconomica74->description_EconomicActivity="Fabricación de hojas de madera para enchapado; fabricación de tableros contrachapados, tableros laminados, tableros de partículas y otros tableros y paneles.";
        $actividadEconomica74->save();
        
        $actividadEconomica75 = new economic_activity();
        $actividadEconomica75->EconomicActivity_number=163;
        $actividadEconomica75->description_EconomicActivity="Actividades posteriores a la cosecha.";
        $actividadEconomica75->save();
        
        $actividadEconomica76 = new economic_activity();
        $actividadEconomica76->EconomicActivity_number=163;
        $actividadEconomica76->description_EconomicActivity="Fabricación de partes y piezas de madera, de carpintería y ebanistería para la construcción.";
        $actividadEconomica76->save();
        
        $actividadEconomica77 = new economic_activity();
        $actividadEconomica77->EconomicActivity_number=164;
        $actividadEconomica77->description_EconomicActivity="Tratamiento de semillas para propagación.";
        $actividadEconomica77->save();
        
        $actividadEconomica78 = new economic_activity();
        $actividadEconomica78->EconomicActivity_number=164;
        $actividadEconomica78->description_EconomicActivity="Fabricación de recipientes de madera.";
        $actividadEconomica78->save();
        
        $actividadEconomica79 = new economic_activity();
        $actividadEconomica79->EconomicActivity_number=169;
        $actividadEconomica79->description_EconomicActivity="Fabricación de otros productos de madera; fabricación de artículos de cestería y espartería.";
        $actividadEconomica79->save();
        
        $actividadEconomica80 = new economic_activity();
        $actividadEconomica80->EconomicActivity_number=170;
        $actividadEconomica80->description_EconomicActivity="Fabricación de papel, cartón y productos de papel y cartón.";
        $actividadEconomica80->save();
        
        $actividadEconomica81 = new economic_activity();
        $actividadEconomica81->EconomicActivity_number=181;
        $actividadEconomica81->description_EconomicActivity="Actividades de impresión y actividades de servicios relacionados con la impresión";
        $actividadEconomica81->save();
        
        $actividadEconomica82 = new economic_activity();
        $actividadEconomica82->EconomicActivity_number=182;
        $actividadEconomica82->description_EconomicActivity="Producción de copias a partir de grabaciones originales.";
        $actividadEconomica82->save();
        
        $actividadEconomica83 = new economic_activity();
        $actividadEconomica83->EconomicActivity_number=191;
        $actividadEconomica83->description_EconomicActivity="Fabricación de productos de hornos de coque.";
        $actividadEconomica83->save();
        
        $actividadEconomica84 = new economic_activity();
        $actividadEconomica84->EconomicActivity_number=192;
        $actividadEconomica84->description_EconomicActivity="Fabricación de productos de la refinación del petróleo.";
        $actividadEconomica84->save();
        
        $actividadEconomica85 = new economic_activity();
        $actividadEconomica85->EconomicActivity_number=201;
        $actividadEconomica85->description_EconomicActivity="Fabricación de sustancias químicas básicas, abonos y compuestos inorgánicos nitrogenados, plásticos y caucho sintético en formas primarias.";
        $actividadEconomica85->save();
        
        $actividadEconomica86 = new economic_activity();
        $actividadEconomica86->EconomicActivity_number=202;
        $actividadEconomica86->description_EconomicActivity="Fabricación de otros productos químicos.";
        $actividadEconomica86->save();
        
        $actividadEconomica87 = new economic_activity();
        $actividadEconomica87->EconomicActivity_number=203;
        $actividadEconomica87->description_EconomicActivity="Fabricación de fibras sintéticas y artificiales.";
        $actividadEconomica87->save();
        
        $actividadEconomica88 = new economic_activity();
        $actividadEconomica88->EconomicActivity_number=210;
        $actividadEconomica88->description_EconomicActivity="Fabricación de productos farmacéuticos, sustancias químicas medicinales y productos botánicos de uso farmacéutico.";
        $actividadEconomica88->save();
        
        $actividadEconomica89 = new economic_activity();
        $actividadEconomica89->EconomicActivity_number=221;
        $actividadEconomica89->description_EconomicActivity="Fabricación de productos de caucho.";
        $actividadEconomica89->save();
        
        $actividadEconomica90 = new economic_activity();
        $actividadEconomica90->EconomicActivity_number=222;
        $actividadEconomica90->description_EconomicActivity="Fabricación de productos de plástico.";
        $actividadEconomica90->save();
        
        $actividadEconomica91 = new economic_activity();
        $actividadEconomica91->EconomicActivity_number=231;
        $actividadEconomica91->description_EconomicActivity="Fabricación de vidrio y productos de vidrio.";
        $actividadEconomica91->save();
        
        $actividadEconomica92 = new economic_activity();
        $actividadEconomica92->EconomicActivity_number=239;
        $actividadEconomica92->description_EconomicActivity="Fabricación de productos minerales no metálicos n.c.p.";
        $actividadEconomica92->save();
        
        $actividadEconomica93 = new economic_activity();
        $actividadEconomica93->EconomicActivity_number=241;
        $actividadEconomica93->description_EconomicActivity="Industrias básicas de hierro y de acero.";
        $actividadEconomica93->save();
        
        $actividadEconomica94 = new economic_activity();
        $actividadEconomica94->EconomicActivity_number=242;
        $actividadEconomica94->description_EconomicActivity="Industrias básicas de metales preciosos y de metales no ferrosos.";
        $actividadEconomica94->save();
        
        $actividadEconomica95 = new economic_activity();
        $actividadEconomica95->EconomicActivity_number=243;
        $actividadEconomica95->description_EconomicActivity="Fundición de metales.";
        $actividadEconomica95->save();
        
        $actividadEconomica96 = new economic_activity();
        $actividadEconomica96->EconomicActivity_number=251;
        $actividadEconomica96->description_EconomicActivity="Fabricación de productos metálicos para uso estructural, tanques, depósitos y generadores de vapor.";
        $actividadEconomica96->save();
        
        $actividadEconomica97 = new economic_activity();
        $actividadEconomica97->EconomicActivity_number=252;
        $actividadEconomica97->description_EconomicActivity="Fabricación de armas y municiones.";
        $actividadEconomica97->save();
        
        $actividadEconomica98 = new economic_activity();
        $actividadEconomica98->EconomicActivity_number=259;
        $actividadEconomica98->description_EconomicActivity="Fabricación de otros productos elaborados de metal y actividades de servicios relacionadas con el trabajo de metales.";
        $actividadEconomica98->save();
        
        $actividadEconomica99 = new economic_activity();
        $actividadEconomica99->EconomicActivity_number=261;
        $actividadEconomica99->description_EconomicActivity="Fabricación de componentes y tableros electrónicos.";
        $actividadEconomica99->save();
        
        $actividadEconomica100 = new economic_activity();
        $actividadEconomica100->EconomicActivity_number=262;
        $actividadEconomica100->description_EconomicActivity="Fabricación de computadoras y de equipo periférico.";
        $actividadEconomica100->save();
        
        $actividadEconomica101 = new economic_activity();
        $actividadEconomica101->EconomicActivity_number=263;
        $actividadEconomica101->description_EconomicActivity="Fabricación de equipos de comunicación.";
        $actividadEconomica101->save();
        
        $actividadEconomica102 = new economic_activity();
        $actividadEconomica102->EconomicActivity_number=264;
        $actividadEconomica102->description_EconomicActivity="Fabricación de aparatos electrónicos de consumo.";
        $actividadEconomica102->save();
        
        $actividadEconomica103 = new economic_activity();
        $actividadEconomica103->EconomicActivity_number=265;
        $actividadEconomica103->description_EconomicActivity="Fabricación de equipo de medición, prueba, navegación y control; fabricación de relojes.";
        $actividadEconomica103->save();
        
        $actividadEconomica104 = new economic_activity();
        $actividadEconomica104->EconomicActivity_number=266;
        $actividadEconomica104->description_EconomicActivity="Fabricación de equipo de irradiación y equipo electrónico de uso médico y terapéutico.";
        $actividadEconomica104->save();
        
        $actividadEconomica105 = new economic_activity();
        $actividadEconomica105->EconomicActivity_number=267;
        $actividadEconomica105->description_EconomicActivity="Fabricación de instrumentos ópticos y equipo fotográfico.";
        $actividadEconomica105->save();
        
        $actividadEconomica106 = new economic_activity();
        $actividadEconomica106->EconomicActivity_number=268;
        $actividadEconomica106->description_EconomicActivity="Fabricación de medios magnéticos y ópticos para almacenamiento de datos";
        $actividadEconomica106->save();
        
        $actividadEconomica107 = new economic_activity();
        $actividadEconomica107->EconomicActivity_number=271;
        $actividadEconomica107->description_EconomicActivity="Fabricación de motores, generadores y transformadores eléctricos y de aparatos de distribución y control de la energía eléctrica.";
        $actividadEconomica107->save();
        
        $actividadEconomica108 = new economic_activity();
        $actividadEconomica108->EconomicActivity_number=272;
        $actividadEconomica108->description_EconomicActivity="Fabricación de pilas, baterías y acumuladores eléctricos.";
        $actividadEconomica108->save();
        
        $actividadEconomica109 = new economic_activity();
        $actividadEconomica109->EconomicActivity_number=273;
        $actividadEconomica109->description_EconomicActivity="Fabricación de hilos y cables aislados y sus dispositivos.";
        $actividadEconomica109->save();
        
        $actividadEconomica110 = new economic_activity();
        $actividadEconomica110->EconomicActivity_number=274;
        $actividadEconomica110->description_EconomicActivity="Fabricación de equipos eléctricos de iluminación.";
        $actividadEconomica110->save();
        
        $actividadEconomica111 = new economic_activity();
        $actividadEconomica111->EconomicActivity_number=275;
        $actividadEconomica111->description_EconomicActivity="Fabricación de aparatos de uso doméstico.";
        $actividadEconomica111->save();
        
        $actividadEconomica112 = new economic_activity();
        $actividadEconomica112->EconomicActivity_number=279;
        $actividadEconomica112->description_EconomicActivity="Fabricación de otros tipos de equipo eléctrico n.c.p.";
        $actividadEconomica112->save();
        
        $actividadEconomica113 = new economic_activity();
        $actividadEconomica113->EconomicActivity_number=281;
        $actividadEconomica113->description_EconomicActivity="Fabricación de maquinaria y equipo de uso general.";
        $actividadEconomica113->save();
        
        $actividadEconomica114 = new economic_activity();
        $actividadEconomica114->EconomicActivity_number=282;
        $actividadEconomica114->description_EconomicActivity="Fabricación de maquinaria y equipo de uso especial.";
        $actividadEconomica114->save();
        
        $actividadEconomica115 = new economic_activity();
        $actividadEconomica115->EconomicActivity_number=291;
        $actividadEconomica115->description_EconomicActivity="Fabricación de vehículos automotores y sus motores.";
        $actividadEconomica115->save();
        
        $actividadEconomica116 = new economic_activity();
        $actividadEconomica116->EconomicActivity_number=292;
        $actividadEconomica116->description_EconomicActivity="Fabricación de carrocerías para vehículos automotores; fabricación de remolques y semirremolques.";
        $actividadEconomica116->save();
        
        $actividadEconomica117 = new economic_activity();
        $actividadEconomica117->EconomicActivity_number=293;
        $actividadEconomica117->description_EconomicActivity="Fabricación de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores.";
        $actividadEconomica117->save();
        
        $actividadEconomica118 = new economic_activity();
        $actividadEconomica118->EconomicActivity_number=301;
        $actividadEconomica118->description_EconomicActivity="Construcción de barcos y otras embarcaciones.";
        $actividadEconomica118->save();
        
        $actividadEconomica119 = new economic_activity();
        $actividadEconomica119->EconomicActivity_number=302;
        $actividadEconomica119->description_EconomicActivity="Fabricación de locomotoras y de material rodante para ferrocarriles.";
        $actividadEconomica119->save();
        
        $actividadEconomica120 = new economic_activity();
        $actividadEconomica120->EconomicActivity_number=303;
        $actividadEconomica120->description_EconomicActivity="Fabricación de aeronaves, naves espaciales y de maquinaria conexa.";
        $actividadEconomica120->save();
        
        $actividadEconomica121 = new economic_activity();
        $actividadEconomica121->EconomicActivity_number=304;
        $actividadEconomica121->description_EconomicActivity="Fabricación de vehículos militares de combate.";
        $actividadEconomica121->save();
        
        $actividadEconomica122 = new economic_activity();
        $actividadEconomica122->EconomicActivity_number=309;
        $actividadEconomica122->description_EconomicActivity="Fabricación de otros tipos de equipo de transporte n.c.p.";
        $actividadEconomica122->save();
        
        $actividadEconomica123 = new economic_activity();
        $actividadEconomica123->EconomicActivity_number=311;
        $actividadEconomica123->description_EconomicActivity="Pesca marítima.";
        $actividadEconomica123->save();
        
        $actividadEconomica124 = new economic_activity();
        $actividadEconomica124->EconomicActivity_number=311;
        $actividadEconomica124->description_EconomicActivity="Fabricación de muebles.";
        $actividadEconomica124->save();
        
        $actividadEconomica125 = new economic_activity();
        $actividadEconomica125->EconomicActivity_number=312;
        $actividadEconomica125->description_EconomicActivity="Pesca de agua dulce.";
        $actividadEconomica125->save();
        
        $actividadEconomica126 = new economic_activity();
        $actividadEconomica126->EconomicActivity_number=312;
        $actividadEconomica126->description_EconomicActivity="Fabricación de colchones y somieres.";
        $actividadEconomica126->save();
        
        $actividadEconomica127 = new economic_activity();
        $actividadEconomica127->EconomicActivity_number=321;
        $actividadEconomica127->description_EconomicActivity="Acuicultura marítima.";
        $actividadEconomica127->save();
        
        $actividadEconomica128 = new economic_activity();
        $actividadEconomica128->EconomicActivity_number=321;
        $actividadEconomica128->description_EconomicActivity="Fabricación de joyas, bisutería y artículos conexos.";
        $actividadEconomica128->save();
        
        $actividadEconomica129 = new economic_activity();
        $actividadEconomica129->EconomicActivity_number=322;
        $actividadEconomica129->description_EconomicActivity="Acuicultura de agua dulce.";
        $actividadEconomica129->save();
        
        $actividadEconomica130 = new economic_activity();
        $actividadEconomica130->EconomicActivity_number=322;
        $actividadEconomica130->description_EconomicActivity="Fabricación de instrumentos musicales.";
        $actividadEconomica130->save();
        
        $actividadEconomica131 = new economic_activity();
        $actividadEconomica131->EconomicActivity_number=323;
        $actividadEconomica131->description_EconomicActivity="Fabricación de artículos y equipo para la práctica del deporte.";
        $actividadEconomica131->save();
        
        $actividadEconomica132 = new economic_activity();
        $actividadEconomica132->EconomicActivity_number=324;
        $actividadEconomica132->description_EconomicActivity="Fabricación de juegos, juguetes y rompecabezas.";
        $actividadEconomica132->save();
        
        $actividadEconomica133 = new economic_activity();
        $actividadEconomica133->EconomicActivity_number=325;
        $actividadEconomica133->description_EconomicActivity="Fabricación de instrumentos, aparatos y materiales médicos y odontológicos (incluido mobiliario).";
        $actividadEconomica133->save();
        
        $actividadEconomica134 = new economic_activity();
        $actividadEconomica134->EconomicActivity_number=329;
        $actividadEconomica134->description_EconomicActivity="Otras industrias manufactureras n.c.p.";
        $actividadEconomica134->save();
        
        $actividadEconomica135 = new economic_activity();
        $actividadEconomica135->EconomicActivity_number=331;
        $actividadEconomica135->description_EconomicActivity="Mantenimiento y reparación especializado de productos elaborados en metal y de maquinaria y equipo.";
        $actividadEconomica135->save();
        
        $actividadEconomica136 = new economic_activity();
        $actividadEconomica136->EconomicActivity_number=332;
        $actividadEconomica136->description_EconomicActivity="Instalación especializada de maquinaria y equipo industrial.";
        $actividadEconomica136->save();
        
        $actividadEconomica137 = new economic_activity();
        $actividadEconomica137->EconomicActivity_number=351;
        $actividadEconomica137->description_EconomicActivity="Generación, transmisión, distribución y comercialización de energía eléctrica";
        $actividadEconomica137->save();
        
        $actividadEconomica138 = new economic_activity();
        $actividadEconomica138->EconomicActivity_number=352;
        $actividadEconomica138->description_EconomicActivity="Producción de gas; distribución de combustibles gaseosos por tuberías.";
        $actividadEconomica138->save();
        
        $actividadEconomica139 = new economic_activity();
        $actividadEconomica139->EconomicActivity_number=353;
        $actividadEconomica139->description_EconomicActivity="Suministro de vapor y aire acondicionado.";
        $actividadEconomica139->save();
        
        $actividadEconomica140 = new economic_activity();
        $actividadEconomica140->EconomicActivity_number=360;
        $actividadEconomica140->description_EconomicActivity="Captación, tratamiento y distribución de agua.";
        $actividadEconomica140->save();
        
        $actividadEconomica141 = new economic_activity();
        $actividadEconomica141->EconomicActivity_number=381;
        $actividadEconomica141->description_EconomicActivity="Recolección de desechos.";
        $actividadEconomica141->save();
        
        $actividadEconomica142 = new economic_activity();
        $actividadEconomica142->EconomicActivity_number=382;
        $actividadEconomica142->description_EconomicActivity="Tratamiento y disposición de desechos.";
        $actividadEconomica142->save();
        
        $actividadEconomica143 = new economic_activity();
        $actividadEconomica143->EconomicActivity_number=383;
        $actividadEconomica143->description_EconomicActivity="Recuperación de materiales.";
        $actividadEconomica143->save();
        
        $actividadEconomica144 = new economic_activity();
        $actividadEconomica144->EconomicActivity_number=411;
        $actividadEconomica144->description_EconomicActivity="Construcción de edificios.";
        $actividadEconomica144->save();
        
        $actividadEconomica145 = new economic_activity();
        $actividadEconomica145->EconomicActivity_number=421;
        $actividadEconomica145->description_EconomicActivity="Construcción de carreteras y vías de ferrocarril.";
        $actividadEconomica145->save();
        
        $actividadEconomica146 = new economic_activity();
        $actividadEconomica146->EconomicActivity_number=422;
        $actividadEconomica146->description_EconomicActivity="Construcción de proyectos de servicio público.";
        $actividadEconomica146->save();
        
        $actividadEconomica147 = new economic_activity();
        $actividadEconomica147->EconomicActivity_number=429;
        $actividadEconomica147->description_EconomicActivity="Construcción de otras obras de ingeniería civil.";
        $actividadEconomica147->save();
        
        $actividadEconomica148 = new economic_activity();
        $actividadEconomica148->EconomicActivity_number=431;
        $actividadEconomica148->description_EconomicActivity="Demolición y preparación del terreno.";
        $actividadEconomica148->save();
        
        $actividadEconomica149 = new economic_activity();
        $actividadEconomica149->EconomicActivity_number=432;
        $actividadEconomica149->description_EconomicActivity="Instalaciones eléctricas, de fontanería y otras instalaciones especializadas.";
        $actividadEconomica149->save();
        
        $actividadEconomica150 = new economic_activity();
        $actividadEconomica150->EconomicActivity_number=433;
        $actividadEconomica150->description_EconomicActivity="Terminación y acabado de edificios y obras de ingeniería civil.";
        $actividadEconomica150->save();
        
        $actividadEconomica151 = new economic_activity();
        $actividadEconomica151->EconomicActivity_number=439;
        $actividadEconomica151->description_EconomicActivity="Otras actividades especializadas para la construcción de edificios y obras de ingeniería civil.";
        $actividadEconomica151->save();
        
        $actividadEconomica152 = new economic_activity();
        $actividadEconomica152->EconomicActivity_number=451;
        $actividadEconomica152->description_EconomicActivity="Comercio de vehículos automotores.";
        $actividadEconomica152->save();
        
        $actividadEconomica153 = new economic_activity();
        $actividadEconomica153->EconomicActivity_number=452;
        $actividadEconomica153->description_EconomicActivity="Mantenimiento y reparación de vehículos automotores.";
        $actividadEconomica153->save();
        
        $actividadEconomica154 = new economic_activity();
        $actividadEconomica154->EconomicActivity_number=453;
        $actividadEconomica154->description_EconomicActivity="Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores.";
        $actividadEconomica154->save();
        
        $actividadEconomica155 = new economic_activity();
        $actividadEconomica155->EconomicActivity_number=454;
        $actividadEconomica155->description_EconomicActivity="Comercio, mantenimiento y reparación de motocicletas y de sus partes, piezas y accesorios.";
        $actividadEconomica155->save();
        
        $actividadEconomica156 = new economic_activity();
        $actividadEconomica156->EconomicActivity_number=461;
        $actividadEconomica156->description_EconomicActivity="Comercio al por mayor a cambio de una retribución o por contrata.";
        $actividadEconomica156->save();
        
        $actividadEconomica157 = new economic_activity();
        $actividadEconomica157->EconomicActivity_number=462;
        $actividadEconomica157->description_EconomicActivity="Comercio al por mayor de materias primas agropecuarias; animales vivos";
        $actividadEconomica157->save();
        
        $actividadEconomica158 = new economic_activity();
        $actividadEconomica158->EconomicActivity_number=463;
        $actividadEconomica158->description_EconomicActivity="Comercio al por mayor de alimentos, bebidas y tabaco.";
        $actividadEconomica158->save();
        
        $actividadEconomica159 = new economic_activity();
        $actividadEconomica159->EconomicActivity_number=464;
        $actividadEconomica159->description_EconomicActivity="Comercio al por mayor de artículos y enseres domésticos (incluidas prendas de vestir).";
        $actividadEconomica159->save();
        
        $actividadEconomica160 = new economic_activity();
        $actividadEconomica160->EconomicActivity_number=465;
        $actividadEconomica160->description_EconomicActivity="Comercio al por mayor de maquinaria y equipo.";
        $actividadEconomica160->save();
        
        $actividadEconomica161 = new economic_activity();
        $actividadEconomica161->EconomicActivity_number=466;
        $actividadEconomica161->description_EconomicActivity="Comercio al por mayor especializado de otros productos.";
        $actividadEconomica161->save();
        
        $actividadEconomica162 = new economic_activity();
        $actividadEconomica162->EconomicActivity_number=469;
        $actividadEconomica162->description_EconomicActivity="Comercio al por mayor no especializado.";
        $actividadEconomica162->save();
        
        $actividadEconomica163 = new economic_activity();
        $actividadEconomica163->EconomicActivity_number=471;
        $actividadEconomica163->description_EconomicActivity="Comercio al por menor en establecimientos no especializados.";
        $actividadEconomica163->save();
        
        $actividadEconomica164 = new economic_activity();
        $actividadEconomica164->EconomicActivity_number=472;
        $actividadEconomica164->description_EconomicActivity="Comercio al por menor de alimentos (víveres en general), bebidas y tabaco, en establecimientos especializados.";
        $actividadEconomica164->save();
        
        $actividadEconomica165 = new economic_activity();
        $actividadEconomica165->EconomicActivity_number=473;
        $actividadEconomica165->description_EconomicActivity="Comercio al por menor de combustible, lubricantes, aditivos y productos de limpieza para automotores, en establecimientos especializados.";
        $actividadEconomica165->save();
        
        $actividadEconomica166 = new economic_activity();
        $actividadEconomica166->EconomicActivity_number=474;
        $actividadEconomica166->description_EconomicActivity="Comercio al por menor de equipos de informática y de comunicaciones, en establecimientos especializados.";
        $actividadEconomica166->save();
        
        $actividadEconomica167 = new economic_activity();
        $actividadEconomica167->EconomicActivity_number=475;
        $actividadEconomica167->description_EconomicActivity="Comercio al por menor de otros enseres domésticos en establecimientos especializados.";
        $actividadEconomica167->save();
        
        $actividadEconomica168 = new economic_activity();
        $actividadEconomica168->EconomicActivity_number=476;
        $actividadEconomica168->description_EconomicActivity="Comercio al por menor de artículos culturales y de entretenimiento, en establecimientos especializados.";
        $actividadEconomica168->save();
        
        $actividadEconomica169 = new economic_activity();
        $actividadEconomica169->EconomicActivity_number=477;
        $actividadEconomica169->description_EconomicActivity="Comercio al por menor de otros productos en establecimientos especializados.";
        $actividadEconomica169->save();
        
        $actividadEconomica170 = new economic_activity();
        $actividadEconomica170->EconomicActivity_number=478;
        $actividadEconomica170->description_EconomicActivity="Comercio al por menor en puestos de venta móviles.";
        $actividadEconomica170->save();
        
        $actividadEconomica171 = new economic_activity();
        $actividadEconomica171->EconomicActivity_number=479;
        $actividadEconomica171->description_EconomicActivity="Comercio al por menor no realizado en establecimientos, puestos de venta o mercados.";
        $actividadEconomica171->save();
        
        $actividadEconomica172 = new economic_activity();
        $actividadEconomica172->EconomicActivity_number=491;
        $actividadEconomica172->description_EconomicActivity="Transporte férreo.";
        $actividadEconomica172->save();
        
        $actividadEconomica173 = new economic_activity();
        $actividadEconomica173->EconomicActivity_number=492;
        $actividadEconomica173->description_EconomicActivity="Transporte terrestre público automotor.";
        $actividadEconomica173->save();
        
        $actividadEconomica174 = new economic_activity();
        $actividadEconomica174->EconomicActivity_number=493;
        $actividadEconomica174->description_EconomicActivity="Transporte por tuberías.";
        $actividadEconomica174->save();
        
        $actividadEconomica175 = new economic_activity();
        $actividadEconomica175->EconomicActivity_number=501;
        $actividadEconomica175->description_EconomicActivity="Transporte marítimo y de cabotaje.";
        $actividadEconomica175->save();
        
        $actividadEconomica176 = new economic_activity();
        $actividadEconomica176->EconomicActivity_number=502;
        $actividadEconomica176->description_EconomicActivity="Transporte fluvial.";
        $actividadEconomica176->save();
        
        $actividadEconomica177 = new economic_activity();
        $actividadEconomica177->EconomicActivity_number=511;
        $actividadEconomica177->description_EconomicActivity="Transporte aéreo de pasajeros.";
        $actividadEconomica177->save();
        
        $actividadEconomica178 = new economic_activity();
        $actividadEconomica178->EconomicActivity_number=512;
        $actividadEconomica178->description_EconomicActivity="Transporte aéreo de carga.";
        $actividadEconomica178->save();
        
        $actividadEconomica179 = new economic_activity();
        $actividadEconomica179->EconomicActivity_number=521;
        $actividadEconomica179->description_EconomicActivity="Almacenamiento y depósito.";
        $actividadEconomica179->save();
        
        $actividadEconomica180 = new economic_activity();
        $actividadEconomica180->EconomicActivity_number=522;
        $actividadEconomica180->description_EconomicActivity="Actividades de las estaciones, vías y servicios complementarios para el transporte.";
        $actividadEconomica180->save();
        
        $actividadEconomica181 = new economic_activity();
        $actividadEconomica181->EconomicActivity_number=531;
        $actividadEconomica181->description_EconomicActivity="Actividades postales nacionales.";
        $actividadEconomica181->save();
        
        $actividadEconomica182 = new economic_activity();
        $actividadEconomica182->EconomicActivity_number=532;
        $actividadEconomica182->description_EconomicActivity="Actividades de mensajería.";
        $actividadEconomica182->save();
        
        $actividadEconomica183 = new economic_activity();
        $actividadEconomica183->EconomicActivity_number=551;
        $actividadEconomica183->description_EconomicActivity="Actividades de alojamiento de estancias cortas.";
        $actividadEconomica183->save();
        
        $actividadEconomica184 = new economic_activity();
        $actividadEconomica184->EconomicActivity_number=553;
        $actividadEconomica184->description_EconomicActivity="Servicio por horas.";
        $actividadEconomica184->save();
        
        $actividadEconomica185 = new economic_activity();
        $actividadEconomica185->EconomicActivity_number=559;
        $actividadEconomica185->description_EconomicActivity="Otros tipos de alojamiento n.c.p.";
        $actividadEconomica185->save();
        
        $actividadEconomica186 = new economic_activity();
        $actividadEconomica186->EconomicActivity_number=561;
        $actividadEconomica186->description_EconomicActivity="Actividades de restaurantes, cafeterías y servicio móvil de comidas.";
        $actividadEconomica186->save();
        
        $actividadEconomica187 = new economic_activity();
        $actividadEconomica187->EconomicActivity_number=562;
        $actividadEconomica187->description_EconomicActivity="ctividades de catering para eventos y otros servicios de comidas.";
        $actividadEconomica187->save();
        
        $actividadEconomica188 = new economic_activity();
        $actividadEconomica188->EconomicActivity_number=563;
        $actividadEconomica188->description_EconomicActivity="Expendio de bebidas alcohólicas para el consumo dentro del establecimiento.";
        $actividadEconomica188->save();
        
        $actividadEconomica189 = new economic_activity();
        $actividadEconomica189->EconomicActivity_number=581;
        $actividadEconomica189->description_EconomicActivity="Edición de libros, publicaciones periódicas y otras actividades de edición.";
        $actividadEconomica189->save();
        
        $actividadEconomica190 = new economic_activity();
        $actividadEconomica190->EconomicActivity_number=582;
        $actividadEconomica190->description_EconomicActivity="dición de programas de informática (software).";
        $actividadEconomica190->save();
        
        $actividadEconomica191 = new economic_activity();
        $actividadEconomica191->EconomicActivity_number=591;
        $actividadEconomica191->description_EconomicActivity="ctividades de producción de películas cinematográficas, video y producción de programas, anuncios y comerciales de televisión.";
        $actividadEconomica191->save();
        
        $actividadEconomica192 = new economic_activity();
        $actividadEconomica192->EconomicActivity_number=592;
        $actividadEconomica192->description_EconomicActivity="Actividades de grabación de sonido y edición de música.";
        $actividadEconomica192->save();
        
        $actividadEconomica193 = new economic_activity();
        $actividadEconomica193->EconomicActivity_number=601;
        $actividadEconomica193->description_EconomicActivity="Actividades de programación y transmisión en el servicio de radiodifusión sonora.";
        $actividadEconomica193->save();
        
        $actividadEconomica194 = new economic_activity();
        $actividadEconomica194->EconomicActivity_number=602;
        $actividadEconomica194->description_EconomicActivity="Actividades de programación y transmisión de televisión.";
        $actividadEconomica194->save();
        
        $actividadEconomica195 = new economic_activity();
        $actividadEconomica195->EconomicActivity_number=611;
        $actividadEconomica195->description_EconomicActivity="Actividades de telecomunicaciones alámbricas.";
        $actividadEconomica195->save();
        
        $actividadEconomica196 = new economic_activity();
        $actividadEconomica196->EconomicActivity_number=612;
        $actividadEconomica196->description_EconomicActivity="Actividades de telecomunicaciones inalámbricas.";
        $actividadEconomica196->save();
        
        $actividadEconomica197 = new economic_activity();
        $actividadEconomica197->EconomicActivity_number=613;
        $actividadEconomica197->description_EconomicActivity="Actividades de telecomunicación satelital.";
        $actividadEconomica197->save();
        
        $actividadEconomica198 = new economic_activity();
        $actividadEconomica198->EconomicActivity_number=619;
        $actividadEconomica198->description_EconomicActivity="Otras actividades de telecomunicaciones.";
        $actividadEconomica198->save();
        
        $actividadEconomica199 = new economic_activity();
        $actividadEconomica199->EconomicActivity_number=620;
        $actividadEconomica199->description_EconomicActivity="Desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas), consultoría informática y actividades relacionadas.";
        $actividadEconomica199->save();
        
        $actividadEconomica200 = new economic_activity();
        $actividadEconomica200->EconomicActivity_number=639;
        $actividadEconomica200->description_EconomicActivity="Otras actividades de servicio de información.";
        $actividadEconomica200->save();
        
        $actividadEconomica201 = new economic_activity();
        $actividadEconomica201->EconomicActivity_number=641;
        $actividadEconomica201->description_EconomicActivity="Intermediación monetaria.";
        $actividadEconomica201->save();
        
        $actividadEconomica202 = new economic_activity();
        $actividadEconomica202->EconomicActivity_number=642;
        $actividadEconomica202->description_EconomicActivity="Otros tipos de intermediación monetaria.";
        $actividadEconomica202->save();
        
        $actividadEconomica203 = new economic_activity();
        $actividadEconomica203->EconomicActivity_number=643;
        $actividadEconomica203->description_EconomicActivity="Fideicomisos, fondos (incluye fondos de cesantías) y entidades financieras similares.";
        $actividadEconomica203->save();
        
        $actividadEconomica204 = new economic_activity();
        $actividadEconomica204->EconomicActivity_number=649;
        $actividadEconomica204->description_EconomicActivity="Otras actividades de servicio financiero, excepto las de seguros y pensiones";
        $actividadEconomica204->save();
        
        $actividadEconomica205 = new economic_activity();
        $actividadEconomica205->EconomicActivity_number=651;
        $actividadEconomica205->description_EconomicActivity="Seguros y capitalización.";
        $actividadEconomica205->save();
        
        $actividadEconomica206 = new economic_activity();
        $actividadEconomica206->EconomicActivity_number=652;
        $actividadEconomica206->description_EconomicActivity="Servicios de seguros sociales de salud y riesgos profesionales.";
        $actividadEconomica206->save();
        
        $actividadEconomica207 = new economic_activity();
        $actividadEconomica207->EconomicActivity_number=653;
        $actividadEconomica207->description_EconomicActivity="Servicios de seguros sociales de pensiones.";
        $actividadEconomica207->save();
        
        $actividadEconomica208 = new economic_activity();
        $actividadEconomica208->EconomicActivity_number=661;
        $actividadEconomica208->description_EconomicActivity="Actividades auxiliares de las actividades de servicios financieros, excepto las de seguros y pensiones.";
        $actividadEconomica208->save();
        
        $actividadEconomica209 = new economic_activity();
        $actividadEconomica209->EconomicActivity_number=662;
        $actividadEconomica209->description_EconomicActivity="Actividades de servicios auxiliares de los servicios de seguros y pensiones.";
        $actividadEconomica209->save();
        
        $actividadEconomica210 = new economic_activity();
        $actividadEconomica210->EconomicActivity_number=663;
        $actividadEconomica210->description_EconomicActivity="Actividades de administración de fondos.";
        $actividadEconomica210->save();
        
        $actividadEconomica211 = new economic_activity();
        $actividadEconomica211->EconomicActivity_number=681;
        $actividadEconomica211->description_EconomicActivity="Actividades inmobiliarias realizadas con bienes propios o arrendados.";
        $actividadEconomica211->save();
        
        $actividadEconomica212 = new economic_activity();
        $actividadEconomica212->EconomicActivity_number=682;
        $actividadEconomica212->description_EconomicActivity="Actividades inmobiliarias realizadas a cambio de una retribución o por contrata.";
        $actividadEconomica212->save();
        
        $actividadEconomica213 = new economic_activity();
        $actividadEconomica213->EconomicActivity_number=691;
        $actividadEconomica213->description_EconomicActivity="Actividades jurídicas.";
        $actividadEconomica213->save();
        
        $actividadEconomica214 = new economic_activity();
        $actividadEconomica214->EconomicActivity_number=692;
        $actividadEconomica214->description_EconomicActivity="Actividades de contabilidad, teneduría de libros, auditoría financiera y asesoría tributaria.";
        $actividadEconomica214->save();
        
        $actividadEconomica215 = new economic_activity();
        $actividadEconomica215->EconomicActivity_number=711;
        $actividadEconomica215->description_EconomicActivity="Actividades de arquitectura e ingeniería y otras actividades conexas de consultoría técnica.";
        $actividadEconomica215->save();
        
        $actividadEconomica216 = new economic_activity();
        $actividadEconomica216->EconomicActivity_number=712;
        $actividadEconomica216->description_EconomicActivity="Ensayos y análisis técnicos.";
        $actividadEconomica216->save();
        
        $actividadEconomica217 = new economic_activity();
        $actividadEconomica217->EconomicActivity_number=721;
        $actividadEconomica217->description_EconomicActivity="Extracción de minerales de uranio y de torio.";
        $actividadEconomica217->save();
        
        $actividadEconomica218 = new economic_activity();
        $actividadEconomica218->EconomicActivity_number=721;
        $actividadEconomica218->description_EconomicActivity="Investigaciones y desarrollo experimental en el campo de las ciencias naturales y la ingeniería.";
        $actividadEconomica218->save();
        
        $actividadEconomica219 = new economic_activity();
        $actividadEconomica219->EconomicActivity_number=722;
        $actividadEconomica219->description_EconomicActivity="Extracción de oro y otros metales preciosos.";
        $actividadEconomica219->save();
        
        $actividadEconomica220 = new economic_activity();
        $actividadEconomica220->EconomicActivity_number=722;
        $actividadEconomica220->description_EconomicActivity="Investigaciones y desarrollo experimental en el campo de las ciencias sociales y las humanidades.";
        $actividadEconomica220->save();
        
        $actividadEconomica221 = new economic_activity();
        $actividadEconomica221->EconomicActivity_number=723;
        $actividadEconomica221->description_EconomicActivity="Extracción de minerales de níquel.";
        $actividadEconomica221->save();
        
        $actividadEconomica222 = new economic_activity();
        $actividadEconomica222->EconomicActivity_number=729;
        $actividadEconomica222->description_EconomicActivity="Extracción de otros minerales metalíferos no ferrosos n.c.p.";
        $actividadEconomica222->save();
        
        $actividadEconomica223 = new economic_activity();
        $actividadEconomica223->EconomicActivity_number=731;
        $actividadEconomica223->description_EconomicActivity="Publicidad.";
        $actividadEconomica223->save();
        
        $actividadEconomica224 = new economic_activity();
        $actividadEconomica224->EconomicActivity_number=732;
        $actividadEconomica224->description_EconomicActivity="Estudios de mercado y realización de encuestas de opinión pública.";
        $actividadEconomica224->save();
        
        $actividadEconomica225 = new economic_activity();
        $actividadEconomica225->EconomicActivity_number=741;
        $actividadEconomica225->description_EconomicActivity="Actividades especializadas de diseño.";
        $actividadEconomica225->save();
        
        $actividadEconomica226 = new economic_activity();
        $actividadEconomica226->EconomicActivity_number=742;
        $actividadEconomica226->description_EconomicActivity="Actividades de fotografía.";
        $actividadEconomica226->save();
        
        $actividadEconomica227 = new economic_activity();
        $actividadEconomica227->EconomicActivity_number=749;
        $actividadEconomica227->description_EconomicActivity="Otras actividades profesionales, científicas y técnicas n.c.p.";
        $actividadEconomica227->save();
        
        $actividadEconomica228 = new economic_activity();
        $actividadEconomica228->EconomicActivity_number=750;
        $actividadEconomica228->description_EconomicActivity="Actividades veterinarias.";
        $actividadEconomica228->save();
        
        $actividadEconomica229 = new economic_activity();
        $actividadEconomica229->EconomicActivity_number=771;
        $actividadEconomica229->description_EconomicActivity="Alquiler y arrendamiento de vehículos automotores.";
        $actividadEconomica229->save();
        
        $actividadEconomica230 = new economic_activity();
        $actividadEconomica230->EconomicActivity_number=772;
        $actividadEconomica230->description_EconomicActivity="Alquiler y arrendamiento de efectos personales y enseres domésticos.";
        $actividadEconomica230->save();
        
        $actividadEconomica231 = new economic_activity();
        $actividadEconomica231->EconomicActivity_number=773;
        $actividadEconomica231->description_EconomicActivity="Alquiler y arrendamiento de otros tipos de maquinaria, equipo y bienes tangibles n.c.p.";
        $actividadEconomica231->save();
        
        $actividadEconomica232 = new economic_activity();
        $actividadEconomica232->EconomicActivity_number=774;
        $actividadEconomica232->description_EconomicActivity="Arrendamiento de propiedad intelectual y productos similares, excepto obras protegidas por derechos de autor.";
        $actividadEconomica232->save();
        
        $actividadEconomica233 = new economic_activity();
        $actividadEconomica233->EconomicActivity_number=781;
        $actividadEconomica233->description_EconomicActivity="Actividades de agencias de empleo.";
        $actividadEconomica233->save();
        
        $actividadEconomica234 = new economic_activity();
        $actividadEconomica234->EconomicActivity_number=782;
        $actividadEconomica234->description_EconomicActivity="Actividades de agencias de empleo temporal.";
        $actividadEconomica234->save();
        
        $actividadEconomica235 = new economic_activity();
        $actividadEconomica235->EconomicActivity_number=783;
        $actividadEconomica235->description_EconomicActivity="Otras actividades de suministro de recurso humano.";
        $actividadEconomica235->save();
        
        $actividadEconomica236 = new economic_activity();
        $actividadEconomica236->EconomicActivity_number=791;
        $actividadEconomica236->description_EconomicActivity="Actividades de las agencias de viajes y operadores turísticos.";
        $actividadEconomica236->save();
        
        $actividadEconomica237 = new economic_activity();
        $actividadEconomica237->EconomicActivity_number=799;
        $actividadEconomica237->description_EconomicActivity="Otros servicios de reserva y actividades relacionadas.";
        $actividadEconomica237->save();
        
        $actividadEconomica238 = new economic_activity();
        $actividadEconomica238->EconomicActivity_number=801;
        $actividadEconomica238->description_EconomicActivity="Actividades de seguridad privada.";
        $actividadEconomica238->save();
        
        $actividadEconomica239 = new economic_activity();
        $actividadEconomica239->EconomicActivity_number=802;
        $actividadEconomica239->description_EconomicActivity="Actividades de servicios de sistemas de seguridad.";
        $actividadEconomica239->save();
        
        $actividadEconomica240 = new economic_activity();
        $actividadEconomica240->EconomicActivity_number=803;
        $actividadEconomica240->description_EconomicActivity="Actividades de detectives e investigadores privados.";
        $actividadEconomica240->save();
        
        $actividadEconomica241 = new economic_activity();
        $actividadEconomica241->EconomicActivity_number=811;
        $actividadEconomica241->description_EconomicActivity="Extracción de piedra, arena, arcillas comunes, yeso y anhidrita.";
        $actividadEconomica241->save();
        
        $actividadEconomica242 = new economic_activity();
        $actividadEconomica242->EconomicActivity_number=811;
        $actividadEconomica242->description_EconomicActivity="Actividades combinadas de apoyo a instalaciones.";
        $actividadEconomica242->save();
        
        $actividadEconomica243 = new economic_activity();
        $actividadEconomica243->EconomicActivity_number=812;
        $actividadEconomica243->description_EconomicActivity="Extracción de arcillas de uso industrial, caliza, caolín y bentonitas.";
        $actividadEconomica243->save();
        
        $actividadEconomica244 = new economic_activity();
        $actividadEconomica244->EconomicActivity_number=812;
        $actividadEconomica244->description_EconomicActivity="Actividades de limpieza.";
        $actividadEconomica244->save();
        
        $actividadEconomica245 = new economic_activity();
        $actividadEconomica245->EconomicActivity_number=813;
        $actividadEconomica245->description_EconomicActivity="Actividades de paisajismo y servicios de mantenimiento conexos.";
        $actividadEconomica245->save();
        
        $actividadEconomica246 = new economic_activity();
        $actividadEconomica246->EconomicActivity_number=821;
        $actividadEconomica246->description_EconomicActivity="Actividades administrativas y de apoyo de oficina.";
        $actividadEconomica246->save();
        
        $actividadEconomica247 = new economic_activity();
        $actividadEconomica247->EconomicActivity_number=822;
        $actividadEconomica247->description_EconomicActivity="Actividades de centros de llamadas (Call center).";
        $actividadEconomica247->save();
        
        $actividadEconomica248 = new economic_activity();
        $actividadEconomica248->EconomicActivity_number=823;
        $actividadEconomica248->description_EconomicActivity="Organización de convenciones y eventos comerciales.";
        $actividadEconomica248->save();
        
        $actividadEconomica249 = new economic_activity();
        $actividadEconomica249->EconomicActivity_number=829;
        $actividadEconomica249->description_EconomicActivity="Actividades de servicios de apoyo a las empresas n.c.p.";
        $actividadEconomica249->save();
        
        $actividadEconomica250 = new economic_activity();
        $actividadEconomica250->EconomicActivity_number=841;
        $actividadEconomica250->description_EconomicActivity="Administración del Estado y aplicación de la política económica y social de la comunidad.";
        $actividadEconomica250->save();
        
        $actividadEconomica251 = new economic_activity();
        $actividadEconomica251->EconomicActivity_number=842;
        $actividadEconomica251->description_EconomicActivity="Prestación de servicios a la comunidad en general.";
        $actividadEconomica251->save();
        
        $actividadEconomica252 = new economic_activity();
        $actividadEconomica252->EconomicActivity_number=843;
        $actividadEconomica252->description_EconomicActivity="Actividades de planes de seguridad social de afiliación obligatoria.";
        $actividadEconomica252->save();
        
        $actividadEconomica253 = new economic_activity();
        $actividadEconomica253->EconomicActivity_number=851;
        $actividadEconomica253->description_EconomicActivity="Educación de la primera infancia, preescolar y básica primaria.";
        $actividadEconomica253->save();
        
        $actividadEconomica254 = new economic_activity();
        $actividadEconomica254->EconomicActivity_number=852;
        $actividadEconomica254->description_EconomicActivity="Educación secundaria y de formación laboral.";
        $actividadEconomica254->save();
        
        $actividadEconomica255 = new economic_activity();
        $actividadEconomica255->EconomicActivity_number=853;
        $actividadEconomica255->description_EconomicActivity="Establecimientos que combinan diferentes niveles de educación.";
        $actividadEconomica255->save();
        
        $actividadEconomica256 = new economic_activity();
        $actividadEconomica256->EconomicActivity_number=854;
        $actividadEconomica256->description_EconomicActivity="Educación superior.";
        $actividadEconomica256->save();
        
        $actividadEconomica257 = new economic_activity();
        $actividadEconomica257->EconomicActivity_number=855;
        $actividadEconomica257->description_EconomicActivity="Otros tipos de educación.";
        $actividadEconomica257->save();
        
        $actividadEconomica258 = new economic_activity();
        $actividadEconomica258->EconomicActivity_number=856;
        $actividadEconomica258->description_EconomicActivity="Actividades de apoyo a la educación.";
        $actividadEconomica258->save();
        
        $actividadEconomica259 = new economic_activity();
        $actividadEconomica259->EconomicActivity_number=861;
        $actividadEconomica259->description_EconomicActivity="Actividades de hospitales y clínicas, con internación.";
        $actividadEconomica259->save();
        
        $actividadEconomica260 = new economic_activity();
        $actividadEconomica260->EconomicActivity_number=862;
        $actividadEconomica260->description_EconomicActivity="Actividades de práctica médica y odontológica, sin internación.";
        $actividadEconomica260->save();
        
        $actividadEconomica261 = new economic_activity();
        $actividadEconomica261->EconomicActivity_number=869;
        $actividadEconomica261->description_EconomicActivity="Otras actividades de atención relacionadas con la salud humana.";
        $actividadEconomica261->save();
        
        $actividadEconomica262 = new economic_activity();
        $actividadEconomica262->EconomicActivity_number=871;
        $actividadEconomica262->description_EconomicActivity="Actividades de atención residencial medicalizada de tipo general.";
        $actividadEconomica262->save();
        
        $actividadEconomica263 = new economic_activity();
        $actividadEconomica263->EconomicActivity_number=872;
        $actividadEconomica263->description_EconomicActivity="Actividades de atención residencial, para el cuidado de pacientes con retardo mental, enfermedad mental y consumo de sustancias psicoactivas.";
        $actividadEconomica263->save();
        
        $actividadEconomica264 = new economic_activity();
        $actividadEconomica264->EconomicActivity_number=873;
        $actividadEconomica264->description_EconomicActivity="Actividades de atención en instituciones para el cuidado de personas mayores y/o discapacitadas.";
        $actividadEconomica264->save();
        
        $actividadEconomica265 = new economic_activity();
        $actividadEconomica265->EconomicActivity_number=879;
        $actividadEconomica265->description_EconomicActivity="Otras actividades de atención en instituciones con alojamiento.";
        $actividadEconomica265->save();
        
        $actividadEconomica266 = new economic_activity();
        $actividadEconomica266->EconomicActivity_number=881;
        $actividadEconomica266->description_EconomicActivity="Actividades de asistencia social sin alojamiento para personas mayores y discapacitadas.";
        $actividadEconomica266->save();
        
        $actividadEconomica267 = new economic_activity();
        $actividadEconomica267->EconomicActivity_number=889;
        $actividadEconomica267->description_EconomicActivity="Otras actividades de asistencia social sin alojamiento.";
        $actividadEconomica267->save();
        
        $actividadEconomica268 = new economic_activity();
        $actividadEconomica268->EconomicActivity_number=891;
        $actividadEconomica268->description_EconomicActivity="Extracción de minerales para la fabricación de abonos y productos químicos.";
        $actividadEconomica268->save();
        
        $actividadEconomica269 = new economic_activity();
        $actividadEconomica269->EconomicActivity_number=892;
        $actividadEconomica269->description_EconomicActivity="Extracción de halita (sal).";
        $actividadEconomica269->save();
        
        $actividadEconomica270 = new economic_activity();
        $actividadEconomica270->EconomicActivity_number=900;
        $actividadEconomica270->description_EconomicActivity="Actividades creativas, artísticas y de entretenimiento.";
        $actividadEconomica270->save();
        
        $actividadEconomica271 = new economic_activity();
        $actividadEconomica271->EconomicActivity_number=910;
        $actividadEconomica271->description_EconomicActivity="Actividades de bibliotecas, archivos, museos y otras actividades culturales.";
        $actividadEconomica271->save();
        
        $actividadEconomica272 = new economic_activity();
        $actividadEconomica272->EconomicActivity_number=920;
        $actividadEconomica272->description_EconomicActivity="Actividades de juegos de azar y apuestas.";
        $actividadEconomica272->save();
        
        $actividadEconomica273 = new economic_activity();
        $actividadEconomica273->EconomicActivity_number=931;
        $actividadEconomica273->description_EconomicActivity="Actividades deportivas.";
        $actividadEconomica273->save();
        
        $actividadEconomica274 = new economic_activity();
        $actividadEconomica274->EconomicActivity_number=932;
        $actividadEconomica274->description_EconomicActivity="Otras actividades recreativas y de esparcimiento.";
        $actividadEconomica274->save();
        
        $actividadEconomica275 = new economic_activity();
        $actividadEconomica275->EconomicActivity_number=941;
        $actividadEconomica275->description_EconomicActivity="Actividades de asociaciones empresariales y de empleadores, y asociaciones profesionales.";
        $actividadEconomica275->save();
        
        $actividadEconomica276 = new economic_activity();
        $actividadEconomica276->EconomicActivity_number=942;
        $actividadEconomica276->description_EconomicActivity="Actividades de sindicatos de empleados.";
        $actividadEconomica276->save();
        
        $actividadEconomica277 = new economic_activity();
        $actividadEconomica277->EconomicActivity_number=949;
        $actividadEconomica277->description_EconomicActivity="Actividades de otras asociaciones.";
        $actividadEconomica277->save();
        
        $actividadEconomica278 = new economic_activity();
        $actividadEconomica278->EconomicActivity_number=951;
        $actividadEconomica278->description_EconomicActivity="Mantenimiento y reparación de computadores y equipo de comunicaciones.";
        $actividadEconomica278->save();
        
        $actividadEconomica279 = new economic_activity();
        $actividadEconomica279->EconomicActivity_number=960;
        $actividadEconomica279->description_EconomicActivity="Otras actividades de servicios personales.";
        $actividadEconomica279->save();
        
        $actividadEconomica280 = new economic_activity();
        $actividadEconomica280->EconomicActivity_number=970;
        $actividadEconomica280->description_EconomicActivity="Actividades de los hogares individuales como empleadores de personal doméstico.";
        $actividadEconomica280->save();
        
        $actividadEconomica281 = new economic_activity();
        $actividadEconomica281->EconomicActivity_number=981;
        $actividadEconomica281->description_EconomicActivity="Actividades no diferenciadas de los hogares individuales como productores de bienes para uso propio.";
        $actividadEconomica281->save();
        
        $actividadEconomica282 = new economic_activity();
        $actividadEconomica282->EconomicActivity_number=982;
        $actividadEconomica282->description_EconomicActivity="Actividades no diferenciadas de los hogares individuales como productores de servicios para uso propio.";
        $actividadEconomica282->save();
        
        $actividadEconomica283 = new economic_activity();
        $actividadEconomica283->EconomicActivity_number=990;
        $actividadEconomica283->description_EconomicActivity="Actividades de apoyo para otras actividades de explotación de minas y canteras.";
        $actividadEconomica283->save();
        
        $actividadEconomica284 = new economic_activity();
        $actividadEconomica284->EconomicActivity_number=1011;
        $actividadEconomica284->description_EconomicActivity="Procesamiento y conservación de carne y productos cárnicos.";
        $actividadEconomica284->save();
        
        $actividadEconomica285 = new economic_activity();
        $actividadEconomica285->EconomicActivity_number=1012;
        $actividadEconomica285->description_EconomicActivity="Procesamiento y conservación de pescados, crustáceos y moluscos.";
        $actividadEconomica285->save();
        
        $actividadEconomica286 = new economic_activity();
        $actividadEconomica286->EconomicActivity_number=1020;
        $actividadEconomica286->description_EconomicActivity="Procesamiento y conservación de frutas, legumbres, hortalizas y tubérculos.";
        $actividadEconomica286->save();
        
        $actividadEconomica287 = new economic_activity();
        $actividadEconomica287->EconomicActivity_number=1051;
        $actividadEconomica287->description_EconomicActivity="Elaboración de productos de molinería.";
        $actividadEconomica287->save();
        
        $actividadEconomica288 = new economic_activity();
        $actividadEconomica288->EconomicActivity_number=1052;
        $actividadEconomica288->description_EconomicActivity="Elaboración de almidones y productos derivados del almidón.";
        $actividadEconomica288->save();
        
        $actividadEconomica289 = new economic_activity();
        $actividadEconomica289->EconomicActivity_number=1061;
        $actividadEconomica289->description_EconomicActivity="Trilla de café.";
        $actividadEconomica289->save();
        
        $actividadEconomica290 = new economic_activity();
        $actividadEconomica290->EconomicActivity_number=1062;
        $actividadEconomica290->description_EconomicActivity="Descafeinado, tostión y molienda del café.";
        $actividadEconomica290->save();
        
        $actividadEconomica291 = new economic_activity();
        $actividadEconomica291->EconomicActivity_number=1063;
        $actividadEconomica291->description_EconomicActivity="Otros derivados del café.";
        $actividadEconomica291->save();
        
        $actividadEconomica292 = new economic_activity();
        $actividadEconomica292->EconomicActivity_number=1071;
        $actividadEconomica292->description_EconomicActivity="Elaboración y refinación de azúcar.";
        $actividadEconomica292->save();
        
        $actividadEconomica293 = new economic_activity();
        $actividadEconomica293->EconomicActivity_number=1072;
        $actividadEconomica293->description_EconomicActivity="Elaboración de panela.";
        $actividadEconomica293->save();
        
        $actividadEconomica294 = new economic_activity();
        $actividadEconomica294->EconomicActivity_number=1081;
        $actividadEconomica294->description_EconomicActivity="Elaboración de productos de panadería.";
        $actividadEconomica294->save();
        
        $actividadEconomica295 = new economic_activity();
        $actividadEconomica295->EconomicActivity_number=1082;
        $actividadEconomica295->description_EconomicActivity="Elaboración de cacao, chocolate y productos de confitería.";
        $actividadEconomica295->save();
        
        $actividadEconomica296 = new economic_activity();
        $actividadEconomica296->EconomicActivity_number=1083;
        $actividadEconomica296->description_EconomicActivity="Elaboración de macarrones, fideos, alcuzcuz y productos farináceos similares.";
        $actividadEconomica296->save();
        
        $actividadEconomica297 = new economic_activity();
        $actividadEconomica297->EconomicActivity_number=1084;
        $actividadEconomica297->description_EconomicActivity="Elaboración de comidas y platos preparados.";
        $actividadEconomica297->save();
        
        $actividadEconomica298 = new economic_activity();
        $actividadEconomica298->EconomicActivity_number=1089;
        $actividadEconomica298->description_EconomicActivity="Elaboración de otros productos alimenticios n.c.p.";
        $actividadEconomica298->save();
        
        $actividadEconomica299 = new economic_activity();
        $actividadEconomica299->EconomicActivity_number=1101;
        $actividadEconomica299->description_EconomicActivity="Destilación, rectificación y mezcla de bebidas alcohólicas.";
        $actividadEconomica299->save();
        
        $actividadEconomica300 = new economic_activity();
        $actividadEconomica300->EconomicActivity_number=1102;
        $actividadEconomica300->description_EconomicActivity="Elaboración de bebidas fermentadas no destiladas.";
        $actividadEconomica300->save();
        
        $actividadEconomica301 = new economic_activity();
        $actividadEconomica301->EconomicActivity_number=1103;
        $actividadEconomica301->description_EconomicActivity="Producción de malta, elaboración de cervezas y otras bebidas malteadas.";
        $actividadEconomica301->save();
        
        $actividadEconomica302 = new economic_activity();
        $actividadEconomica302->EconomicActivity_number=1104;
        $actividadEconomica302->description_EconomicActivity="Elaboración de bebidas no alcohólicas, producción de aguas minerales y de otras aguas embotelladas.";
        $actividadEconomica302->save();
        
        $actividadEconomica303 = new economic_activity();
        $actividadEconomica303->EconomicActivity_number=1311;
        $actividadEconomica303->description_EconomicActivity="Preparación e hilatura de fibras textiles.";
        $actividadEconomica303->save();
        
        $actividadEconomica304 = new economic_activity();
        $actividadEconomica304->EconomicActivity_number=1312;
        $actividadEconomica304->description_EconomicActivity="Tejeduría de productos textiles.";
        $actividadEconomica304->save();
        
        $actividadEconomica305 = new economic_activity();
        $actividadEconomica305->EconomicActivity_number=1313;
        $actividadEconomica305->description_EconomicActivity="Acabado de productos textiles.";
        $actividadEconomica305->save();
        
        $actividadEconomica306 = new economic_activity();
        $actividadEconomica306->EconomicActivity_number=1391;
        $actividadEconomica306->description_EconomicActivity="Fabricación de tejidos de punto y ganchillo.";
        $actividadEconomica306->save();
        
        $actividadEconomica307 = new economic_activity();
        $actividadEconomica307->EconomicActivity_number=1392;
        $actividadEconomica307->description_EconomicActivity="Confección de artículos con materiales textiles, excepto prendas de vestir.";
        $actividadEconomica307->save();
        
        $actividadEconomica308 = new economic_activity();
        $actividadEconomica308->EconomicActivity_number=1393;
        $actividadEconomica308->description_EconomicActivity="Fabricación de tapetes y alfombras para pisos.";
        $actividadEconomica308->save();
        
        $actividadEconomica309 = new economic_activity();
        $actividadEconomica309->EconomicActivity_number=1394;
        $actividadEconomica309->description_EconomicActivity="Fabricación de cuerdas, cordeles, cables, bramantes y redes.";
        $actividadEconomica309->save();
        
        $actividadEconomica310 = new economic_activity();
        $actividadEconomica310->EconomicActivity_number=1399;
        $actividadEconomica310->description_EconomicActivity="Fabricación de otros artículos textiles n.c.p.";
        $actividadEconomica310->save();
        
        $actividadEconomica311 = new economic_activity();
        $actividadEconomica311->EconomicActivity_number=1511;
        $actividadEconomica311->description_EconomicActivity="Curtido y recurtido de cueros; recurtido y teñido de pieles.";
        $actividadEconomica311->save();
        
        $actividadEconomica312 = new economic_activity();
        $actividadEconomica312->EconomicActivity_number=1512;
        $actividadEconomica312->description_EconomicActivity="Fabricación de artículos de viaje, bolsos de mano y artículos similares elaborados en cuero, y fabricación de artículos de talabartería y guarnicionería.";
        $actividadEconomica312->save();
        
        $actividadEconomica313 = new economic_activity();
        $actividadEconomica313->EconomicActivity_number=1521;
        $actividadEconomica313->description_EconomicActivity="Fabricación de calzado de cuero y piel, con cualquier tipo de suela.";
        $actividadEconomica313->save();
        
        $actividadEconomica314 = new economic_activity();
        $actividadEconomica314->EconomicActivity_number=1522;
        $actividadEconomica314->description_EconomicActivity="Fabricación de otros tipos de calzado, excepto calzado de cuero y piel.";
        $actividadEconomica314->save();
        
        $actividadEconomica315 = new economic_activity();
        $actividadEconomica315->EconomicActivity_number=1523;
        $actividadEconomica315->description_EconomicActivity="Fabricación de partes del calzado.";
        $actividadEconomica315->save();
        
        $actividadEconomica316 = new economic_activity();
        $actividadEconomica316->EconomicActivity_number=1701;
        $actividadEconomica316->description_EconomicActivity="Fabricación de pulpas (pastas) celulósicas; papel y cartón.";
        $actividadEconomica316->save();
        
        $actividadEconomica317 = new economic_activity();
        $actividadEconomica317->EconomicActivity_number=1702;
        $actividadEconomica317->description_EconomicActivity="Fabricación de papel y cartón ondulado (corrugado); fabricación de envases, empaques y de embalajes de papel y cartón.";
        $actividadEconomica317->save();
        
        $actividadEconomica318 = new economic_activity();
        $actividadEconomica318->EconomicActivity_number=1709;
        $actividadEconomica318->description_EconomicActivity="Fabricación de otros artículos de papel y cartón.";
        $actividadEconomica318->save();
        
        $actividadEconomica319 = new economic_activity();
        $actividadEconomica319->EconomicActivity_number=1811;
        $actividadEconomica319->description_EconomicActivity="Actividades de impresión.";
        $actividadEconomica319->save();
        
        $actividadEconomica320 = new economic_activity();
        $actividadEconomica320->EconomicActivity_number=1812;
        $actividadEconomica320->description_EconomicActivity="Actividades de servicios relacionados con la impresión.";
        $actividadEconomica320->save();
        
        $actividadEconomica321 = new economic_activity();
        $actividadEconomica321->EconomicActivity_number=1922;
        $actividadEconomica321->description_EconomicActivity="Actividad de mezcla de combustibles.";
        $actividadEconomica321->save();
        
        $actividadEconomica322 = new economic_activity();
        $actividadEconomica322->EconomicActivity_number=2011;
        $actividadEconomica322->description_EconomicActivity="Fabricación de sustancias y productos químicos básicos.";
        $actividadEconomica322->save();
        
        $actividadEconomica323 = new economic_activity();
        $actividadEconomica323->EconomicActivity_number=2012;
        $actividadEconomica323->description_EconomicActivity="Fabricación de abonos y compuestos inorgánicos nitrogenados.";
        $actividadEconomica323->save();
        
        $actividadEconomica324 = new economic_activity();
        $actividadEconomica324->EconomicActivity_number=2013;
        $actividadEconomica324->description_EconomicActivity="Fabricación de plásticos en formas primarias.";
        $actividadEconomica324->save();
        
        $actividadEconomica325 = new economic_activity();
        $actividadEconomica325->EconomicActivity_number=2014;
        $actividadEconomica325->description_EconomicActivity="Fabricación de caucho sintético en formas primarias.";
        $actividadEconomica325->save();
        
        $actividadEconomica326 = new economic_activity();
        $actividadEconomica326->EconomicActivity_number=2021;
        $actividadEconomica326->description_EconomicActivity="Fabricación de plaguicidas y otros productos químicos de uso agropecuario.";
        $actividadEconomica326->save();
        
        $actividadEconomica327 = new economic_activity();
        $actividadEconomica327->EconomicActivity_number=2022;
        $actividadEconomica327->description_EconomicActivity="Fabricación de pinturas, barnices y revestimientos similares, tintas para impresión y masillas.";
        $actividadEconomica327->save();
        
        $actividadEconomica328 = new economic_activity();
        $actividadEconomica328->EconomicActivity_number=2023;
        $actividadEconomica328->description_EconomicActivity="Fabricación de jabones y detergentes, preparados para limpiar y pulir; perfumes y preparados de tocador.";
        $actividadEconomica328->save();
        
        $actividadEconomica329 = new economic_activity();
        $actividadEconomica329->EconomicActivity_number=2029;
        $actividadEconomica329->description_EconomicActivity="perfumes y preparados de tocador. Fabricación de otros productos químicos n.c.p.";
        $actividadEconomica329->save();
        
        $actividadEconomica330 = new economic_activity();
        $actividadEconomica330->EconomicActivity_number=2211;
        $actividadEconomica330->description_EconomicActivity="Fabricación de llantas y neumáticos de caucho";
        $actividadEconomica330->save();
        
        $actividadEconomica331 = new economic_activity();
        $actividadEconomica331->EconomicActivity_number=2212;
        $actividadEconomica331->description_EconomicActivity="Reencauche de llantas usadas";
        $actividadEconomica331->save();
        
        $actividadEconomica332 = new economic_activity();
        $actividadEconomica332->EconomicActivity_number=2219;
        $actividadEconomica332->description_EconomicActivity="Fabricación de formas básicas de caucho y otros productos de caucho n.c.p.";
        $actividadEconomica332->save();
        
        $actividadEconomica333 = new economic_activity();
        $actividadEconomica333->EconomicActivity_number=2221;
        $actividadEconomica333->description_EconomicActivity="Fabricación de formas básicas de plástico.";
        $actividadEconomica333->save();
        
        $actividadEconomica334 = new economic_activity();
        $actividadEconomica334->EconomicActivity_number=2229;
        $actividadEconomica334->description_EconomicActivity="Fabricación de artículos de plástico n.c.p.";
        $actividadEconomica334->save();
        
        $actividadEconomica335 = new economic_activity();
        $actividadEconomica335->EconomicActivity_number=2391;
        $actividadEconomica335->description_EconomicActivity="Fabricación de productos refractarios.";
        $actividadEconomica335->save();
        
        $actividadEconomica336 = new economic_activity();
        $actividadEconomica336->EconomicActivity_number=2392;
        $actividadEconomica336->description_EconomicActivity="Fabricación de materiales de arcilla para la construcción.";
        $actividadEconomica336->save();
        
        $actividadEconomica337 = new economic_activity();
        $actividadEconomica337->EconomicActivity_number=2393;
        $actividadEconomica337->description_EconomicActivity="Fabricación de otros productos de cerámica y porcelana.";
        $actividadEconomica337->save();
        
        $actividadEconomica338 = new economic_activity();
        $actividadEconomica338->EconomicActivity_number=2394;
        $actividadEconomica338->description_EconomicActivity="Fabricación de cemento, cal y yeso.";
        $actividadEconomica338->save();
        
        $actividadEconomica339 = new economic_activity();
        $actividadEconomica339->EconomicActivity_number=2395;
        $actividadEconomica339->description_EconomicActivity="Fabricación de artículos de hormigón, cemento y yeso.";
        $actividadEconomica339->save();
        
        $actividadEconomica340 = new economic_activity();
        $actividadEconomica340->EconomicActivity_number=2396;
        $actividadEconomica340->description_EconomicActivity="Corte, tallado y acabado de la piedra.";
        $actividadEconomica340->save();
        
        $actividadEconomica341 = new economic_activity();
        $actividadEconomica341->EconomicActivity_number=2399;
        $actividadEconomica341->description_EconomicActivity="Fabricación de otros productos minerales no metálicos n.c.p.";
        $actividadEconomica341->save();
        
        $actividadEconomica342 = new economic_activity();
        $actividadEconomica342->EconomicActivity_number=2421;
        $actividadEconomica342->description_EconomicActivity="Industrias básicas de metales preciosos.";
        $actividadEconomica342->save();
        
        $actividadEconomica343 = new economic_activity();
        $actividadEconomica343->EconomicActivity_number=2429;
        $actividadEconomica343->description_EconomicActivity="Industrias básicas de otros metales no ferrosos.";
        $actividadEconomica343->save();
        
        $actividadEconomica344 = new economic_activity();
        $actividadEconomica344->EconomicActivity_number=2431;
        $actividadEconomica344->description_EconomicActivity="Fundición de hierro y de acero.";
        $actividadEconomica344->save();
        
        $actividadEconomica345 = new economic_activity();
        $actividadEconomica345->EconomicActivity_number=2432;
        $actividadEconomica345->description_EconomicActivity="Fundición de metales no ferrosos.";
        $actividadEconomica345->save();
        
        $actividadEconomica346 = new economic_activity();
        $actividadEconomica346->EconomicActivity_number=2511;
        $actividadEconomica346->description_EconomicActivity="Fabricación de productos metálicos para uso estructural.";
        $actividadEconomica346->save();
        
        $actividadEconomica347 = new economic_activity();
        $actividadEconomica347->EconomicActivity_number=2512;
        $actividadEconomica347->description_EconomicActivity="Fabricación de tanques, depósitos y recipientes de metal, excepto los utilizados para el envase o transporte de mercancías.";
        $actividadEconomica347->save();
        
        $actividadEconomica348 = new economic_activity();
        $actividadEconomica348->EconomicActivity_number=2513;
        $actividadEconomica348->description_EconomicActivity="Fabricación de generadores de vapor, excepto calderas de agua caliente para calefacción central,";
        $actividadEconomica348->save();
        
        $actividadEconomica349 = new economic_activity();
        $actividadEconomica349->EconomicActivity_number=2591;
        $actividadEconomica349->description_EconomicActivity="Forja, prensado, estampado y laminado de metal; pulvimetalurgia.";
        $actividadEconomica349->save();
        
        $actividadEconomica350 = new economic_activity();
        $actividadEconomica350->EconomicActivity_number=2592;
        $actividadEconomica350->description_EconomicActivity="Tratamiento y revestimiento de metales; mecanizado.";
        $actividadEconomica350->save();
        
        $actividadEconomica351 = new economic_activity();
        $actividadEconomica351->EconomicActivity_number=2593;
        $actividadEconomica351->description_EconomicActivity="Fabricación de artículos de cuchillería, herramientas de mano y artículos de ferretería.";
        $actividadEconomica351->save();
        
        $actividadEconomica352 = new economic_activity();
        $actividadEconomica352->EconomicActivity_number=2599;
        $actividadEconomica352->description_EconomicActivity="Fabricación de otros productos laborados de metal n.c.p.";
        $actividadEconomica352->save();
        
        $actividadEconomica353 = new economic_activity();
        $actividadEconomica353->EconomicActivity_number=2651;
        $actividadEconomica353->description_EconomicActivity="abricación de equipo de medición, prueba, navegación y control";
        $actividadEconomica353->save();
        
        $actividadEconomica354 = new economic_activity();
        $actividadEconomica354->EconomicActivity_number=2652;
        $actividadEconomica354->description_EconomicActivity="Fabricación de relojes.";
        $actividadEconomica354->save();
        
        $actividadEconomica355 = new economic_activity();
        $actividadEconomica355->EconomicActivity_number=2680;
        $actividadEconomica355->description_EconomicActivity="Fabricación de medios magnéticos y ópticos para almacenamiento de datos.";
        $actividadEconomica355->save();
        
        $actividadEconomica356 = new economic_activity();
        $actividadEconomica356->EconomicActivity_number=2711;
        $actividadEconomica356->description_EconomicActivity="Fabricación de motores, generadores y transformadores eléctricos.";
        $actividadEconomica356->save();
        
        $actividadEconomica357 = new economic_activity();
        $actividadEconomica357->EconomicActivity_number=2712;
        $actividadEconomica357->description_EconomicActivity="Fabricación de aparatos de distribución y control de la energía eléctrica.";
        $actividadEconomica357->save();
        
        $actividadEconomica358 = new economic_activity();
        $actividadEconomica358->EconomicActivity_number=2731;
        $actividadEconomica358->description_EconomicActivity="Fabricación de hilos y cables eléctricos y de fibra óptica.";
        $actividadEconomica358->save();
        
        $actividadEconomica359 = new economic_activity();
        $actividadEconomica359->EconomicActivity_number=2732;
        $actividadEconomica359->description_EconomicActivity="Fabricación de dispositivos de cableado.";
        $actividadEconomica359->save();
        
        $actividadEconomica360 = new economic_activity();
        $actividadEconomica360->EconomicActivity_number=2811;
        $actividadEconomica360->description_EconomicActivity="Fabricación de motores, turbinas, y partes para motores de combustión interna.";
        $actividadEconomica360->save();
        
        $actividadEconomica361 = new economic_activity();
        $actividadEconomica361->EconomicActivity_number=2812;
        $actividadEconomica361->description_EconomicActivity="Fabricación de equipos de potencia hidráulica y neumática.";
        $actividadEconomica361->save();
        
        $actividadEconomica362 = new economic_activity();
        $actividadEconomica362->EconomicActivity_number=2813;
        $actividadEconomica362->description_EconomicActivity="Fabricación de otras bombas, compresores, grifos y válvulas.";
        $actividadEconomica362->save();
        
        $actividadEconomica363 = new economic_activity();
        $actividadEconomica363->EconomicActivity_number=2814;
        $actividadEconomica363->description_EconomicActivity="Fabricación de cojinetes, engranajes, trenes de engranajes y piezas de transmisión";
        $actividadEconomica363->save();
        
        $actividadEconomica364 = new economic_activity();
        $actividadEconomica364->EconomicActivity_number=2815;
        $actividadEconomica364->description_EconomicActivity="Fabricación de hornos, hogares y quemadores industriales.";
        $actividadEconomica364->save();
        
        $actividadEconomica365 = new economic_activity();
        $actividadEconomica365->EconomicActivity_number=2816;
        $actividadEconomica365->description_EconomicActivity="Fabricación de equipo de elevación y manipulación.";
        $actividadEconomica365->save();
        
        $actividadEconomica366 = new economic_activity();
        $actividadEconomica366->EconomicActivity_number=2817;
        $actividadEconomica366->description_EconomicActivity="Fabricación de maquinaria y equipo de oficina (excepto computadoras y equipo periférico).";
        $actividadEconomica366->save();
        
        $actividadEconomica367 = new economic_activity();
        $actividadEconomica367->EconomicActivity_number=2818;
        $actividadEconomica367->description_EconomicActivity="Fabricación de herramientas manuales con motor.";
        $actividadEconomica367->save();
        
        $actividadEconomica368 = new economic_activity();
        $actividadEconomica368->EconomicActivity_number=2819;
        $actividadEconomica368->description_EconomicActivity="Fabricación de otros tipos de maquinaria y equipo de uso general n.c.p.";
        $actividadEconomica368->save();
        
        $actividadEconomica369 = new economic_activity();
        $actividadEconomica369->EconomicActivity_number=2821;
        $actividadEconomica369->description_EconomicActivity="Fabricación de maquinaria agropecuaria y forestal.";
        $actividadEconomica369->save();
        
        $actividadEconomica370 = new economic_activity();
        $actividadEconomica370->EconomicActivity_number=2822;
        $actividadEconomica370->description_EconomicActivity="Fabricación de máquinas formadoras de metal y de máquinas herramienta.";
        $actividadEconomica370->save();
        
        $actividadEconomica371 = new economic_activity();
        $actividadEconomica371->EconomicActivity_number=2823;
        $actividadEconomica371->description_EconomicActivity="Fabricación de maquinaria para la metalurgia.";
        $actividadEconomica371->save();
        
        $actividadEconomica372 = new economic_activity();
        $actividadEconomica372->EconomicActivity_number=2824;
        $actividadEconomica372->description_EconomicActivity="Fabricación de maquinaria para explotación de minas y canteras y para obras de construcción.";
        $actividadEconomica372->save();
        
        $actividadEconomica373 = new economic_activity();
        $actividadEconomica373->EconomicActivity_number=2825;
        $actividadEconomica373->description_EconomicActivity="Fabricación de maquinaria para la elaboración de alimentos, bebidas y tabaco";
        $actividadEconomica373->save();
        
        $actividadEconomica374 = new economic_activity();
        $actividadEconomica374->EconomicActivity_number=2826;
        $actividadEconomica374->description_EconomicActivity="Fabricación de maquinaria para la elaboración de productos textiles, prendas de vestir y cueros.";
        $actividadEconomica374->save();
        
        $actividadEconomica375 = new economic_activity();
        $actividadEconomica375->EconomicActivity_number=2829;
        $actividadEconomica375->description_EconomicActivity="Fabricación de otros tipos de maquinaria y equipo de uso especial n.c.p.";
        $actividadEconomica375->save();
        
        $actividadEconomica376 = new economic_activity();
        $actividadEconomica376->EconomicActivity_number=3011;
        $actividadEconomica376->description_EconomicActivity="Construcción de barcos y de estructuras flotantes.";
        $actividadEconomica376->save();
        
        $actividadEconomica377 = new economic_activity();
        $actividadEconomica377->EconomicActivity_number=3012;
        $actividadEconomica377->description_EconomicActivity="Construcción de embarcaciones de recreo y deporte.";
        $actividadEconomica377->save();
        
        $actividadEconomica378 = new economic_activity();
        $actividadEconomica378->EconomicActivity_number=3091;
        $actividadEconomica378->description_EconomicActivity="Fabricación de motocicletas.";
        $actividadEconomica378->save();
        
        $actividadEconomica379 = new economic_activity();
        $actividadEconomica379->EconomicActivity_number=3092;
        $actividadEconomica379->description_EconomicActivity="Fabricación de bicicletas y de sillas de ruedas para personas con discapacidad.";
        $actividadEconomica379->save();
        
        $actividadEconomica380 = new economic_activity();
        $actividadEconomica380->EconomicActivity_number=3311;
        $actividadEconomica380->description_EconomicActivity="Mantenimiento y reparación especializado de productos elaborados en metal.";
        $actividadEconomica380->save();
        
        $actividadEconomica381 = new economic_activity();
        $actividadEconomica381->EconomicActivity_number=3312;
        $actividadEconomica381->description_EconomicActivity="Mantenimiento y reparación especializado de maquinaria y equipo.";
        $actividadEconomica381->save();
        
        $actividadEconomica382 = new economic_activity();
        $actividadEconomica382->EconomicActivity_number=3313;
        $actividadEconomica382->description_EconomicActivity="Mantenimiento y reparación especializado de equipo electrónico y óptico.";
        $actividadEconomica382->save();
        
        $actividadEconomica383 = new economic_activity();
        $actividadEconomica383->EconomicActivity_number=3314;
        $actividadEconomica383->description_EconomicActivity="Mantenimiento y reparación especializado de equipo eléctrico.";
        $actividadEconomica383->save();
        
        $actividadEconomica384 = new economic_activity();
        $actividadEconomica384->EconomicActivity_number=3315;
        $actividadEconomica384->description_EconomicActivity="Mantenimiento y reparación especializado de equipo de transporte, excepto los vehículos automotores, motocicletas y bicicletas.";
        $actividadEconomica384->save();
        
        $actividadEconomica385 = new economic_activity();
        $actividadEconomica385->EconomicActivity_number=3319;
        $actividadEconomica385->description_EconomicActivity="Mantenimiento y reparación de otros tipos de equipos y sus componentes n.c.p.";
        $actividadEconomica385->save();
        
        $actividadEconomica386 = new economic_activity();
        $actividadEconomica386->EconomicActivity_number=3511;
        $actividadEconomica386->description_EconomicActivity="Generación de energía eléctrica.";
        $actividadEconomica386->save();
        
        $actividadEconomica387 = new economic_activity();
        $actividadEconomica387->EconomicActivity_number=3512;
        $actividadEconomica387->description_EconomicActivity="Transmisión de energía eléctrica.";
        $actividadEconomica387->save();
        
        $actividadEconomica388 = new economic_activity();
        $actividadEconomica388->EconomicActivity_number=3513;
        $actividadEconomica388->description_EconomicActivity="Distribución de energía eléctrica.";
        $actividadEconomica388->save();
        
        $actividadEconomica389 = new economic_activity();
        $actividadEconomica389->EconomicActivity_number=3514;
        $actividadEconomica389->description_EconomicActivity="Comercialización de energía eléctrica.";
        $actividadEconomica389->save();
        
        $actividadEconomica390 = new economic_activity();
        $actividadEconomica390->EconomicActivity_number=3811;
        $actividadEconomica390->description_EconomicActivity="Recolección de desechos no peligrosos.";
        $actividadEconomica390->save();
        
        $actividadEconomica391 = new economic_activity();
        $actividadEconomica391->EconomicActivity_number=3812;
        $actividadEconomica391->description_EconomicActivity="Recolección de desechos peligrosos.";
        $actividadEconomica391->save();
        
        $actividadEconomica392 = new economic_activity();
        $actividadEconomica392->EconomicActivity_number=3821;
        $actividadEconomica392->description_EconomicActivity="Tratamiento y disposición de desechos no peligrosos.";
        $actividadEconomica392->save();
        
        $actividadEconomica393 = new economic_activity();
        $actividadEconomica393->EconomicActivity_number=3822;
        $actividadEconomica393->description_EconomicActivity="Tratamiento y disposición de desechos peligrosos.";
        $actividadEconomica393->save();
        
        $actividadEconomica394 = new economic_activity();
        $actividadEconomica394->EconomicActivity_number=3900;
        $actividadEconomica394->description_EconomicActivity="Actividades de saneamiento ambiental y otros servicios de gestión de desechos.";
        $actividadEconomica394->save();
        
        $actividadEconomica395 = new economic_activity();
        $actividadEconomica395->EconomicActivity_number=4111;
        $actividadEconomica395->description_EconomicActivity="Construcción de edificios residenciales.";
        $actividadEconomica395->save();
        
        $actividadEconomica396 = new economic_activity();
        $actividadEconomica396->EconomicActivity_number=4112;
        $actividadEconomica396->description_EconomicActivity="Construcción de edificios no residenciales.";
        $actividadEconomica396->save();
        
        $actividadEconomica397 = new economic_activity();
        $actividadEconomica397->EconomicActivity_number=4311;
        $actividadEconomica397->description_EconomicActivity="Demolición.";
        $actividadEconomica397->save();
        
        $actividadEconomica398 = new economic_activity();
        $actividadEconomica398->EconomicActivity_number=4312;
        $actividadEconomica398->description_EconomicActivity="Preparación del terreno.";
        $actividadEconomica398->save();
        
        $actividadEconomica399 = new economic_activity();
        $actividadEconomica399->EconomicActivity_number=4321;
        $actividadEconomica399->description_EconomicActivity="Instalaciones eléctricas.";
        $actividadEconomica399->save();
        
        $actividadEconomica400 = new economic_activity();
        $actividadEconomica400->EconomicActivity_number=4322;
        $actividadEconomica400->description_EconomicActivity="Instalaciones de fontanería, calefacción y aire acondicionado.";
        $actividadEconomica400->save();
        
        $actividadEconomica401 = new economic_activity();
        $actividadEconomica401->EconomicActivity_number=4329;
        $actividadEconomica401->description_EconomicActivity="Otras instalaciones especializadas.";
        $actividadEconomica401->save();
        
        $actividadEconomica402 = new economic_activity();
        $actividadEconomica402->EconomicActivity_number=4511;
        $actividadEconomica402->description_EconomicActivity="Comercio de vehículos automotores nuevos.";
        $actividadEconomica402->save();
        
        $actividadEconomica403 = new economic_activity();
        $actividadEconomica403->EconomicActivity_number=4512;
        $actividadEconomica403->description_EconomicActivity="Comercio de vehículos automotores usados.";
        $actividadEconomica403->save();
        
        $actividadEconomica404 = new economic_activity();
        $actividadEconomica404->EconomicActivity_number=4530;
        $actividadEconomica404->description_EconomicActivity="Comercio de partes, piezas (autopartes) y accesorios (lujos) para vehículos automotores";
        $actividadEconomica404->save();
        
        $actividadEconomica405 = new economic_activity();
        $actividadEconomica405->EconomicActivity_number=4541;
        $actividadEconomica405->description_EconomicActivity="Comercio de motocicletas y de sus partes, piezas y accesorios.";
        $actividadEconomica405->save();
        
        $actividadEconomica406 = new economic_activity();
        $actividadEconomica406->EconomicActivity_number=4542;
        $actividadEconomica406->description_EconomicActivity="Mantenimiento y reparación de motocicletas y de sus partes y piezas.";
        $actividadEconomica406->save();
        
        $actividadEconomica407 = new economic_activity();
        $actividadEconomica407->EconomicActivity_number=4620;
        $actividadEconomica407->description_EconomicActivity="Comercio al por mayor de materias primas agropecuarias; animales vivos.";
        $actividadEconomica407->save();
        
        $actividadEconomica408 = new economic_activity();
        $actividadEconomica408->EconomicActivity_number=4631;
        $actividadEconomica408->description_EconomicActivity="Comercio al por mayor de productos alimenticios.";
        $actividadEconomica408->save();
        
        $actividadEconomica409 = new economic_activity();
        $actividadEconomica409->EconomicActivity_number=4632;
        $actividadEconomica409->description_EconomicActivity="Comercio al por mayor de bebidas y tabaco.";
        $actividadEconomica409->save();
        
        $actividadEconomica410 = new economic_activity();
        $actividadEconomica410->EconomicActivity_number=4641;
        $actividadEconomica410->description_EconomicActivity="Comercio al por mayor de productos textiles, productos confeccionados para uso doméstico.";
        $actividadEconomica410->save();
        
        $actividadEconomica411 = new economic_activity();
        $actividadEconomica411->EconomicActivity_number=4642;
        $actividadEconomica411->description_EconomicActivity="Comercio al por mayor de prendas de vestir.";
        $actividadEconomica411->save();
        
        $actividadEconomica412 = new economic_activity();
        $actividadEconomica412->EconomicActivity_number=4643;
        $actividadEconomica412->description_EconomicActivity="Comercio al por mayor de calzado.";
        $actividadEconomica412->save();
        
        $actividadEconomica413 = new economic_activity();
        $actividadEconomica413->EconomicActivity_number=4644;
        $actividadEconomica413->description_EconomicActivity="Comercio al por mayor de aparatos y equipo de uso doméstico.";
        $actividadEconomica413->save();
        
        $actividadEconomica414 = new economic_activity();
        $actividadEconomica414->EconomicActivity_number=4645;
        $actividadEconomica414->description_EconomicActivity="Comercio al por mayor de productos farmacéuticos, medicinales, cosméticos y de tocador.";
        $actividadEconomica414->save();
        
        $actividadEconomica415 = new economic_activity();
        $actividadEconomica415->EconomicActivity_number=4649;
        $actividadEconomica415->description_EconomicActivity="Comercio al por mayor de otros utensilios domésticos n.c.p.";
        $actividadEconomica415->save();
        
        $actividadEconomica416 = new economic_activity();
        $actividadEconomica416->EconomicActivity_number=4651;
        $actividadEconomica416->description_EconomicActivity="Comercio al por mayor de computadores, equipo periférico y programas de informática.";
        $actividadEconomica416->save();
        
        $actividadEconomica417 = new economic_activity();
        $actividadEconomica417->EconomicActivity_number=4652;
        $actividadEconomica417->description_EconomicActivity="Comercio al por mayor de equipo, partes y piezas electrónicos y de telecomunicaciones.";
        $actividadEconomica417->save();
        
        $actividadEconomica418 = new economic_activity();
        $actividadEconomica418->EconomicActivity_number=4653;
        $actividadEconomica418->description_EconomicActivity="Comercio al por mayor de maquinaria y equipo agropecuarios.";
        $actividadEconomica418->save();
        
        $actividadEconomica419 = new economic_activity();
        $actividadEconomica419->EconomicActivity_number=4659;
        $actividadEconomica419->description_EconomicActivity="Comercio al por mayor de otros tipos de maquinaria y equipo n.c.p.";
        $actividadEconomica419->save();
        
        $actividadEconomica420 = new economic_activity();
        $actividadEconomica420->EconomicActivity_number=4661;
        $actividadEconomica420->description_EconomicActivity="Comercio al por mayor de combustibles sólidos, líquidos, gaseosos y productos conexos.";
        $actividadEconomica420->save();
        
        $actividadEconomica421 = new economic_activity();
        $actividadEconomica421->EconomicActivity_number=4662;
        $actividadEconomica421->description_EconomicActivity="Comercio al por mayor de metales y productos metalíferos.";
        $actividadEconomica421->save();
        
        $actividadEconomica422 = new economic_activity();
        $actividadEconomica422->EconomicActivity_number=4663;
        $actividadEconomica422->description_EconomicActivity="Comercio al por mayor de materiales de construcción, artículos de ferretería, pinturas, productos de vidrio, equipo y materiales de fontanería y calefacción.";
        $actividadEconomica422->save();
        
        $actividadEconomica423 = new economic_activity();
        $actividadEconomica423->EconomicActivity_number=4664;
        $actividadEconomica423->description_EconomicActivity="Comercio al por mayor de productos químicos básicos, cauchos y plásticos en formas primarias y productos químicos de uso agropecuario.";
        $actividadEconomica423->save();
        
        $actividadEconomica424 = new economic_activity();
        $actividadEconomica424->EconomicActivity_number=4665;
        $actividadEconomica424->description_EconomicActivity="Comercio al por mayor de desperdicios, desechos y chatarra.";
        $actividadEconomica424->save();
        
        $actividadEconomica425 = new economic_activity();
        $actividadEconomica425->EconomicActivity_number=4669;
        $actividadEconomica425->description_EconomicActivity="Comercio al por mayor de otros productos n.c.p.";
        $actividadEconomica425->save();
        
        $actividadEconomica426 = new economic_activity();
        $actividadEconomica426->EconomicActivity_number=4711;
        $actividadEconomica426->description_EconomicActivity="Comercio al por menor en establecimientos no especializados con surtido compuesto principalmente por alimentos, bebidas o tabaco.";
        $actividadEconomica426->save();
        
        $actividadEconomica427 = new economic_activity();
        $actividadEconomica427->EconomicActivity_number=4719;
        $actividadEconomica427->description_EconomicActivity="Comercio al por menor en establecimientos no especializados, con surtido compuesto principalmente por productos diferentes de alimentos (víveres en general), bebidas y tabaco.";
        $actividadEconomica427->save();
        
        $actividadEconomica428 = new economic_activity();
        $actividadEconomica428->EconomicActivity_number=4721;
        $actividadEconomica428->description_EconomicActivity="abaco, en establecimientos especializados. 4721 Comercio al por menor de productos agrícolas para el consumo en establecimientos especializados.";
        $actividadEconomica428->save();
        
        $actividadEconomica429 = new economic_activity();
        $actividadEconomica429->EconomicActivity_number=4722;
        $actividadEconomica429->description_EconomicActivity="Comercio al por menor de leche, productos lácteos y huevos, en establecimientos especializados.";
        $actividadEconomica429->save();
        
        $actividadEconomica430 = new economic_activity();
        $actividadEconomica430->EconomicActivity_number=4723;
        $actividadEconomica430->description_EconomicActivity="Comercio al por menor de carnes (incluye aves de corral), productos cárnicos, pescados y productos de mar, en establecimientos especializados.";
        $actividadEconomica430->save();
        
        $actividadEconomica431 = new economic_activity();
        $actividadEconomica431->EconomicActivity_number=4724;
        $actividadEconomica431->description_EconomicActivity="Comercio al por menor de bebidas y productos del tabaco, en establecimientos especializados.";
        $actividadEconomica431->save();
        
        $actividadEconomica432 = new economic_activity();
        $actividadEconomica432->EconomicActivity_number=4729;
        $actividadEconomica432->description_EconomicActivity="Comercio al por menor de otros productos alimenticios n.c.p., en establecimientos especializados.";
        $actividadEconomica432->save();
        
        $actividadEconomica433 = new economic_activity();
        $actividadEconomica433->EconomicActivity_number=4731;
        $actividadEconomica433->description_EconomicActivity="Comercio al por menor de combustible para automotores.";
        $actividadEconomica433->save();
        
        $actividadEconomica434 = new economic_activity();
        $actividadEconomica434->EconomicActivity_number=4732;
        $actividadEconomica434->description_EconomicActivity="Comercio al por menor de lubricantes (aceites, grasas), aditivos y productos de limpieza para vehículos automotores.";
        $actividadEconomica434->save();
        
        $actividadEconomica435 = new economic_activity();
        $actividadEconomica435->EconomicActivity_number=4741;
        $actividadEconomica435->description_EconomicActivity="Comercio al por menor de computadores, equipos periféricos, programas de informática y equipos de telecomunicaciones en establecimientos especializados.";
        $actividadEconomica435->save();
        
        $actividadEconomica436 = new economic_activity();
        $actividadEconomica436->EconomicActivity_number=4742;
        $actividadEconomica436->description_EconomicActivity="Comercio al por menor de equipos y aparatos de sonido y de video, en establecimientos especializados.";
        $actividadEconomica436->save();
        
        $actividadEconomica437 = new economic_activity();
        $actividadEconomica437->EconomicActivity_number=4751;
        $actividadEconomica437->description_EconomicActivity="Comercio al por menor de productos textiles en establecimientos especializados.";
        $actividadEconomica437->save();
        
        $actividadEconomica438 = new economic_activity();
        $actividadEconomica438->EconomicActivity_number=4752;
        $actividadEconomica438->description_EconomicActivity="Comercio al por menor de artículos de ferretería, pinturas y productos de vidrio en establecimientos especializados.";
        $actividadEconomica438->save();
        
        $actividadEconomica439 = new economic_activity();
        $actividadEconomica439->EconomicActivity_number=4753;
        $actividadEconomica439->description_EconomicActivity="Comercio al por menor de tapices, alfombras y cubrimientos para paredes y pisos en establecimientos especializados.";
        $actividadEconomica439->save();
        
        $actividadEconomica440 = new economic_activity();
        $actividadEconomica440->EconomicActivity_number=4754;
        $actividadEconomica440->description_EconomicActivity="Comercio al por menor de electrodomésticos y gasodomésticos de uso doméstico, muebles y equipos de iluminación.";
        $actividadEconomica440->save();
        
        $actividadEconomica441 = new economic_activity();
        $actividadEconomica441->EconomicActivity_number=4755;
        $actividadEconomica441->description_EconomicActivity="Comercio al por menor de artículos y utensilios de uso doméstico.";
        $actividadEconomica441->save();
        
        $actividadEconomica442 = new economic_activity();
        $actividadEconomica442->EconomicActivity_number=4759;
        $actividadEconomica442->description_EconomicActivity="Comercio al por menor de otros artículos domésticos en establecimientos especializados.";
        $actividadEconomica442->save();
        
        $actividadEconomica443 = new economic_activity();
        $actividadEconomica443->EconomicActivity_number=4761;
        $actividadEconomica443->description_EconomicActivity="Comercio al por menor de libros, periódicos, materiales y artículos de papelería y escritorio, en establecimientos especializados.";
        $actividadEconomica443->save();
        
        $actividadEconomica444 = new economic_activity();
        $actividadEconomica444->EconomicActivity_number=4762;
        $actividadEconomica444->description_EconomicActivity="Comercio al por menor de artículos deportivos, en establecimientos especializados.";
        $actividadEconomica444->save();
        
        $actividadEconomica445 = new economic_activity();
        $actividadEconomica445->EconomicActivity_number=4769;
        $actividadEconomica445->description_EconomicActivity="Comercio al por menor de otros artículos culturales y de entretenimiento n.c.p. en establecimientos especializados.";
        $actividadEconomica445->save();
        
        $actividadEconomica446 = new economic_activity();
        $actividadEconomica446->EconomicActivity_number=4771;
        $actividadEconomica446->description_EconomicActivity="Comercio al por menor de prendas de vestir y sus accesorios (incluye artículos de piel) en establecimientos especializados.";
        $actividadEconomica446->save();
        
        $actividadEconomica447 = new economic_activity();
        $actividadEconomica447->EconomicActivity_number=4772;
        $actividadEconomica447->description_EconomicActivity="Comercio al por menor de todo tipo de calzado y artículos de cuero y sucedáneos del cuero en establecimientos especializados.";
        $actividadEconomica447->save();
        
        $actividadEconomica448 = new economic_activity();
        $actividadEconomica448->EconomicActivity_number=4773;
        $actividadEconomica448->description_EconomicActivity="Comercio al por menor de productos farmacéuticos y medicinales, cosméticos y artículos de tocador en establecimientos especializados.";
        $actividadEconomica448->save();
        
        $actividadEconomica449 = new economic_activity();
        $actividadEconomica449->EconomicActivity_number=4774;
        $actividadEconomica449->description_EconomicActivity="Comercio al por menor de otros productos nuevos en establecimientos especializados.";
        $actividadEconomica449->save();
        
        $actividadEconomica450 = new economic_activity();
        $actividadEconomica450->EconomicActivity_number=4775;
        $actividadEconomica450->description_EconomicActivity="Comercio al por menor de artículos de segunda mano.";
        $actividadEconomica450->save();
        
        $actividadEconomica451 = new economic_activity();
        $actividadEconomica451->EconomicActivity_number=4781;
        $actividadEconomica451->description_EconomicActivity="Comercio al por menor de alimentos, bebidas y tabaco, en puestos de venta móviles.";
        $actividadEconomica451->save();
        
        $actividadEconomica452 = new economic_activity();
        $actividadEconomica452->EconomicActivity_number=4789;
        $actividadEconomica452->description_EconomicActivity="Comercio al por menor de otros productos en puestos de venta móviles.";
        $actividadEconomica452->save();
        
        $actividadEconomica453 = new economic_activity();
        $actividadEconomica453->EconomicActivity_number=4791;
        $actividadEconomica453->description_EconomicActivity="Comercio al por menor realizado a través de internet.";
        $actividadEconomica453->save();
        
        $actividadEconomica454 = new economic_activity();
        $actividadEconomica454->EconomicActivity_number=4792;
        $actividadEconomica454->description_EconomicActivity="Comercio al por menor realizado a través de casas de venta o por correo.";
        $actividadEconomica454->save();
        
        $actividadEconomica455 = new economic_activity();
        $actividadEconomica455->EconomicActivity_number=4799;
        $actividadEconomica455->description_EconomicActivity="Otros tipos de comercio al por menor no realizado en establecimientos, puestos de venta o mercados.";
        $actividadEconomica455->save();
        
        $actividadEconomica456 = new economic_activity();
        $actividadEconomica456->EconomicActivity_number=4911;
        $actividadEconomica456->description_EconomicActivity="Transporte férreo de pasajeros.";
        $actividadEconomica456->save();
        
        $actividadEconomica457 = new economic_activity();
        $actividadEconomica457->EconomicActivity_number=4912;
        $actividadEconomica457->description_EconomicActivity="Transporte férreo de carga.";
        $actividadEconomica457->save();
        
        $actividadEconomica458 = new economic_activity();
        $actividadEconomica458->EconomicActivity_number=4921;
        $actividadEconomica458->description_EconomicActivity="Transporte de pasajeros.";
        $actividadEconomica458->save();
        
        $actividadEconomica459 = new economic_activity();
        $actividadEconomica459->EconomicActivity_number=4922;
        $actividadEconomica459->description_EconomicActivity="Transporte mixto.";
        $actividadEconomica459->save();
        
        $actividadEconomica460 = new economic_activity();
        $actividadEconomica460->EconomicActivity_number=4923;
        $actividadEconomica460->description_EconomicActivity="Transporte de carga por carretera.";
        $actividadEconomica460->save();
        
        $actividadEconomica461 = new economic_activity();
        $actividadEconomica461->EconomicActivity_number=5011;
        $actividadEconomica461->description_EconomicActivity="Transporte de pasajeros marítimo y de cabotaje.";
        $actividadEconomica461->save();
        
        $actividadEconomica462 = new economic_activity();
        $actividadEconomica462->EconomicActivity_number=5012;
        $actividadEconomica462->description_EconomicActivity="Transporte de carga marítimo y de cabotaje.";
        $actividadEconomica462->save();
        
        $actividadEconomica463 = new economic_activity();
        $actividadEconomica463->EconomicActivity_number=5021;
        $actividadEconomica463->description_EconomicActivity="Transporte fluvial de pasajeros.";
        $actividadEconomica463->save();
        
        $actividadEconomica464 = new economic_activity();
        $actividadEconomica464->EconomicActivity_number=5022;
        $actividadEconomica464->description_EconomicActivity="Transporte fluvial de carga.";
        $actividadEconomica464->save();
        
        $actividadEconomica465 = new economic_activity();
        $actividadEconomica465->EconomicActivity_number=5111;
        $actividadEconomica465->description_EconomicActivity="Transporte aéreo nacional de pasajeros.";
        $actividadEconomica465->save();
        
        $actividadEconomica466 = new economic_activity();
        $actividadEconomica466->EconomicActivity_number=5112;
        $actividadEconomica466->description_EconomicActivity="Transporte aéreo internacional de pasajeros.";
        $actividadEconomica466->save();
        
        $actividadEconomica467 = new economic_activity();
        $actividadEconomica467->EconomicActivity_number=5121;
        $actividadEconomica467->description_EconomicActivity="Transporte aéreo nacional de carga.";
        $actividadEconomica467->save();
        
        $actividadEconomica468 = new economic_activity();
        $actividadEconomica468->EconomicActivity_number=5122;
        $actividadEconomica468->description_EconomicActivity="Transporte aéreo internacional de carga.";
        $actividadEconomica468->save();
        
        $actividadEconomica469 = new economic_activity();
        $actividadEconomica469->EconomicActivity_number=5221;
        $actividadEconomica469->description_EconomicActivity="Actividades de estaciones, vías y servicios complementarios para el transporte terrestre.";
        $actividadEconomica469->save();
        
        $actividadEconomica470 = new economic_activity();
        $actividadEconomica470->EconomicActivity_number=5222;
        $actividadEconomica470->description_EconomicActivity="Actividades de puertos y servicios complementarios para el transporte acuático.";
        $actividadEconomica470->save();
        
        $actividadEconomica471 = new economic_activity();
        $actividadEconomica471->EconomicActivity_number=5223;
        $actividadEconomica471->description_EconomicActivity="Actividades de aeropuertos, servicios de navegación aérea y demás actividades conexas al transporte aéreo.";
        $actividadEconomica471->save();
        
        $actividadEconomica472 = new economic_activity();
        $actividadEconomica472->EconomicActivity_number=5224;
        $actividadEconomica472->description_EconomicActivity="Manipulación de carga.";
        $actividadEconomica472->save();
        
        $actividadEconomica473 = new economic_activity();
        $actividadEconomica473->EconomicActivity_number=5229;
        $actividadEconomica473->description_EconomicActivity="Otras actividades complementarias al transporte.";
        $actividadEconomica473->save();
        
        $actividadEconomica474 = new economic_activity();
        $actividadEconomica474->EconomicActivity_number=5511;
        $actividadEconomica474->description_EconomicActivity="Alojamiento en hoteles.";
        $actividadEconomica474->save();
        
        $actividadEconomica475 = new economic_activity();
        $actividadEconomica475->EconomicActivity_number=5512;
        $actividadEconomica475->description_EconomicActivity="Alojamiento en apartahoteles.";
        $actividadEconomica475->save();
        
        $actividadEconomica476 = new economic_activity();
        $actividadEconomica476->EconomicActivity_number=5513;
        $actividadEconomica476->description_EconomicActivity="Alojamiento en centros vacacionales.";
        $actividadEconomica476->save();
        
        $actividadEconomica477 = new economic_activity();
        $actividadEconomica477->EconomicActivity_number=5514;
        $actividadEconomica477->description_EconomicActivity="Alojamiento rural.";
        $actividadEconomica477->save();
        
        $actividadEconomica478 = new economic_activity();
        $actividadEconomica478->EconomicActivity_number=5519;
        $actividadEconomica478->description_EconomicActivity="Otros tipos de alojamientos para visitantes.";
        $actividadEconomica478->save();
        
        $actividadEconomica479 = new economic_activity();
        $actividadEconomica479->EconomicActivity_number=5520;
        $actividadEconomica479->description_EconomicActivity="Actividades de zonas de camping y parques para vehículos recreacionales.";
        $actividadEconomica479->save();
        
        $actividadEconomica480 = new economic_activity();
        $actividadEconomica480->EconomicActivity_number=5530;
        $actividadEconomica480->description_EconomicActivity="Servicio por horas";
        $actividadEconomica480->save();
        
        $actividadEconomica481 = new economic_activity();
        $actividadEconomica481->EconomicActivity_number=5611;
        $actividadEconomica481->description_EconomicActivity="Expendio a la mesa de comidas preparadas.";
        $actividadEconomica481->save();
        
        $actividadEconomica482 = new economic_activity();
        $actividadEconomica482->EconomicActivity_number=5612;
        $actividadEconomica482->description_EconomicActivity="Expendio por autoservicio de comidas preparadas.";
        $actividadEconomica482->save();
        
        $actividadEconomica483 = new economic_activity();
        $actividadEconomica483->EconomicActivity_number=5613;
        $actividadEconomica483->description_EconomicActivity="Expendio de comidas preparadas en cafeterías.";
        $actividadEconomica483->save();
        
        $actividadEconomica484 = new economic_activity();
        $actividadEconomica484->EconomicActivity_number=5619;
        $actividadEconomica484->description_EconomicActivity="Otros tipos de expendio de comidas preparadas n.c.p.";
        $actividadEconomica484->save();
        
        $actividadEconomica485 = new economic_activity();
        $actividadEconomica485->EconomicActivity_number=5621;
        $actividadEconomica485->description_EconomicActivity="Catering para eventos.";
        $actividadEconomica485->save();
        
        $actividadEconomica486 = new economic_activity();
        $actividadEconomica486->EconomicActivity_number=5629;
        $actividadEconomica486->description_EconomicActivity="Actividades de otros servicios de comidas.";
        $actividadEconomica486->save();
        
        $actividadEconomica487 = new economic_activity();
        $actividadEconomica487->EconomicActivity_number=5811;
        $actividadEconomica487->description_EconomicActivity="Edición de libros.";
        $actividadEconomica487->save();
        
        $actividadEconomica488 = new economic_activity();
        $actividadEconomica488->EconomicActivity_number=5812;
        $actividadEconomica488->description_EconomicActivity="Edición de directorios y listas de correo.";
        $actividadEconomica488->save();
        
        $actividadEconomica489 = new economic_activity();
        $actividadEconomica489->EconomicActivity_number=5813;
        $actividadEconomica489->description_EconomicActivity="Edición de periódicos, revistas y otras publicaciones periódicas.";
        $actividadEconomica489->save();
        
        $actividadEconomica490 = new economic_activity();
        $actividadEconomica490->EconomicActivity_number=5819;
        $actividadEconomica490->description_EconomicActivity="Otros trabajos de edición.";
        $actividadEconomica490->save();
        
        $actividadEconomica491 = new economic_activity();
        $actividadEconomica491->EconomicActivity_number=5820;
        $actividadEconomica491->description_EconomicActivity="Edición de programas de informática (software).";
        $actividadEconomica491->save();
        
        $actividadEconomica492 = new economic_activity();
        $actividadEconomica492->EconomicActivity_number=5911;
        $actividadEconomica492->description_EconomicActivity="Actividades de producción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión.";
        $actividadEconomica492->save();
        
        $actividadEconomica493 = new economic_activity();
        $actividadEconomica493->EconomicActivity_number=5912;
        $actividadEconomica493->description_EconomicActivity="Actividades de posproducción de películas cinematográficas, videos, programas, anuncios y comerciales de televisión.";
        $actividadEconomica493->save();
        
        $actividadEconomica494 = new economic_activity();
        $actividadEconomica494->EconomicActivity_number=5913;
        $actividadEconomica494->description_EconomicActivity="Actividades de distribución de películas cinematográficas, videos, programas, anuncios y comerciales de televisión.";
        $actividadEconomica494->save();
        
        $actividadEconomica495 = new economic_activity();
        $actividadEconomica495->EconomicActivity_number=5914;
        $actividadEconomica495->description_EconomicActivity="ctividades de exhibición de películas cinematográficas y videos.";
        $actividadEconomica495->save();
        
        $actividadEconomica496 = new economic_activity();
        $actividadEconomica496->EconomicActivity_number=6201;
        $actividadEconomica496->description_EconomicActivity="Actividades de desarrollo de sistemas informáticos (planificación, análisis, diseño, programación, pruebas).";
        $actividadEconomica496->save();
        
        $actividadEconomica497 = new economic_activity();
        $actividadEconomica497->EconomicActivity_number=6202;
        $actividadEconomica497->description_EconomicActivity="Actividades de consultoría informática y actividades de administración de instalaciones informáticas.";
        $actividadEconomica497->save();
        
        $actividadEconomica498 = new economic_activity();
        $actividadEconomica498->EconomicActivity_number=6209;
        $actividadEconomica498->description_EconomicActivity="Otras actividades de tecnologías de información y actividades de servicios informáticos.";
        $actividadEconomica498->save();
        
        $actividadEconomica499 = new economic_activity();
        $actividadEconomica499->EconomicActivity_number=6311;
        $actividadEconomica499->description_EconomicActivity="Procesamiento de datos, alojamiento (hosting) y actividades relacionadas; portales web.";
        $actividadEconomica499->save();
        
        $actividadEconomica500 = new economic_activity();
        $actividadEconomica500->EconomicActivity_number=6312;
        $actividadEconomica500->description_EconomicActivity="Portales web.";
        $actividadEconomica500->save();
        
        $actividadEconomica501 = new economic_activity();
        $actividadEconomica501->EconomicActivity_number=6391;
        $actividadEconomica501->description_EconomicActivity="Actividades de agencias de noticias.";
        $actividadEconomica501->save();
        
        $actividadEconomica502 = new economic_activity();
        $actividadEconomica502->EconomicActivity_number=6399;
        $actividadEconomica502->description_EconomicActivity="Otras actividades de servicio de información n.c.p.";
        $actividadEconomica502->save();
        
        $actividadEconomica503 = new economic_activity();
        $actividadEconomica503->EconomicActivity_number=6411;
        $actividadEconomica503->description_EconomicActivity="Banco Central.";
        $actividadEconomica503->save();
        
        $actividadEconomica504 = new economic_activity();
        $actividadEconomica504->EconomicActivity_number=6412;
        $actividadEconomica504->description_EconomicActivity="Bancos comerciales.";
        $actividadEconomica504->save();
        
        $actividadEconomica505 = new economic_activity();
        $actividadEconomica505->EconomicActivity_number=6421;
        $actividadEconomica505->description_EconomicActivity="Actividades de las corporaciones financieras.";
        $actividadEconomica505->save();
        
        $actividadEconomica506 = new economic_activity();
        $actividadEconomica506->EconomicActivity_number=6422;
        $actividadEconomica506->description_EconomicActivity="Actividades de las compañías de financiamiento.";
        $actividadEconomica506->save();
        
        $actividadEconomica507 = new economic_activity();
        $actividadEconomica507->EconomicActivity_number=6423;
        $actividadEconomica507->description_EconomicActivity="Banca de segundo piso.";
        $actividadEconomica507->save();
        
        $actividadEconomica508 = new economic_activity();
        $actividadEconomica508->EconomicActivity_number=6424;
        $actividadEconomica508->description_EconomicActivity="Actividades de las cooperativas financieras.";
        $actividadEconomica508->save();
        
        $actividadEconomica509 = new economic_activity();
        $actividadEconomica509->EconomicActivity_number=6431;
        $actividadEconomica509->description_EconomicActivity="Fideicomisos, fondos y entidades financieras similares.";
        $actividadEconomica509->save();
        
        $actividadEconomica510 = new economic_activity();
        $actividadEconomica510->EconomicActivity_number=6432;
        $actividadEconomica510->description_EconomicActivity="Fondos de cesantías.";
        $actividadEconomica510->save();
        
        $actividadEconomica511 = new economic_activity();
        $actividadEconomica511->EconomicActivity_number=6491;
        $actividadEconomica511->description_EconomicActivity="Leasing financiero (arrendamiento financiero).";
        $actividadEconomica511->save();
        
        $actividadEconomica512 = new economic_activity();
        $actividadEconomica512->EconomicActivity_number=6492;
        $actividadEconomica512->description_EconomicActivity="Actividades financieras de fondos de empleados y otras formas asociativas del sector solidario.";
        $actividadEconomica512->save();
        
        $actividadEconomica513 = new economic_activity();
        $actividadEconomica513->EconomicActivity_number=6493;
        $actividadEconomica513->description_EconomicActivity="Actividades de compra de cartera o factoring.";
        $actividadEconomica513->save();
        
        $actividadEconomica514 = new economic_activity();
        $actividadEconomica514->EconomicActivity_number=6494;
        $actividadEconomica514->description_EconomicActivity="Otras actividades de distribución de fondos.";
        $actividadEconomica514->save();
        
        $actividadEconomica515 = new economic_activity();
        $actividadEconomica515->EconomicActivity_number=6495;
        $actividadEconomica515->description_EconomicActivity="Instituciones especiales oficiales.";
        $actividadEconomica515->save();
        
        $actividadEconomica516 = new economic_activity();
        $actividadEconomica516->EconomicActivity_number=6499;
        $actividadEconomica516->description_EconomicActivity="Otras actividades de servicio financiero, excepto las de seguros y pensiones n.c.p.";
        $actividadEconomica516->save();
        
        $actividadEconomica517 = new economic_activity();
        $actividadEconomica517->EconomicActivity_number=6511;
        $actividadEconomica517->description_EconomicActivity="Seguros generales.";
        $actividadEconomica517->save();
        
        $actividadEconomica518 = new economic_activity();
        $actividadEconomica518->EconomicActivity_number=6512;
        $actividadEconomica518->description_EconomicActivity="Seguros de vida.";
        $actividadEconomica518->save();
        
        $actividadEconomica519 = new economic_activity();
        $actividadEconomica519->EconomicActivity_number=6513;
        $actividadEconomica519->description_EconomicActivity="Reaseguros.";
        $actividadEconomica519->save();
        
        $actividadEconomica520 = new economic_activity();
        $actividadEconomica520->EconomicActivity_number=6514;
        $actividadEconomica520->description_EconomicActivity="Capitalización.";
        $actividadEconomica520->save();
        
        $actividadEconomica521 = new economic_activity();
        $actividadEconomica521->EconomicActivity_number=6521;
        $actividadEconomica521->description_EconomicActivity="Servicios de seguros sociales de salud.";
        $actividadEconomica521->save();
        
        $actividadEconomica522 = new economic_activity();
        $actividadEconomica522->EconomicActivity_number=6522;
        $actividadEconomica522->description_EconomicActivity="Servicios de seguros sociales de riesgos profesionales.";
        $actividadEconomica522->save();
        
        $actividadEconomica523 = new economic_activity();
        $actividadEconomica523->EconomicActivity_number=6531;
        $actividadEconomica523->description_EconomicActivity="Régimen de prima media con prestación definida (RPM).";
        $actividadEconomica523->save();
        
        $actividadEconomica524 = new economic_activity();
        $actividadEconomica524->EconomicActivity_number=6532;
        $actividadEconomica524->description_EconomicActivity="Régimen de ahorro individual (RAI).";
        $actividadEconomica524->save();
        
        $actividadEconomica525 = new economic_activity();
        $actividadEconomica525->EconomicActivity_number=6611;
        $actividadEconomica525->description_EconomicActivity="Administración de mercados financieros.";
        $actividadEconomica525->save();
        
        $actividadEconomica526 = new economic_activity();
        $actividadEconomica526->EconomicActivity_number=6612;
        $actividadEconomica526->description_EconomicActivity="Corretaje de valores y de contratos de productos básicos.";
        $actividadEconomica526->save();
        
        $actividadEconomica527 = new economic_activity();
        $actividadEconomica527->EconomicActivity_number=6613;
        $actividadEconomica527->description_EconomicActivity="Otras actividades relacionadas con el mercado de valores.";
        $actividadEconomica527->save();
        
        $actividadEconomica528 = new economic_activity();
        $actividadEconomica528->EconomicActivity_number=6614;
        $actividadEconomica528->description_EconomicActivity="Actividades de las casas de cambio.";
        $actividadEconomica528->save();
        
        $actividadEconomica529 = new economic_activity();
        $actividadEconomica529->EconomicActivity_number=6615;
        $actividadEconomica529->description_EconomicActivity="Actividades de los profesionales de compra y venta de divisas.";
        $actividadEconomica529->save();
        
        $actividadEconomica530 = new economic_activity();
        $actividadEconomica530->EconomicActivity_number=6619;
        $actividadEconomica530->description_EconomicActivity="Otras actividades auxiliares de las actividades de servicios financieros n.c.p.";
        $actividadEconomica530->save();
        
        $actividadEconomica531 = new economic_activity();
        $actividadEconomica531->EconomicActivity_number=6621;
        $actividadEconomica531->description_EconomicActivity="Actividades de agentes y corredores de seguros";
        $actividadEconomica531->save();
        
        $actividadEconomica532 = new economic_activity();
        $actividadEconomica532->EconomicActivity_number=6629;
        $actividadEconomica532->description_EconomicActivity="Evaluación de riesgos y daños, y otras actividades de servicios auxiliares";
        $actividadEconomica532->save();
        
        $actividadEconomica533 = new economic_activity();
        $actividadEconomica533->EconomicActivity_number=7220;
        $actividadEconomica533->description_EconomicActivity="Investigaciones y desarrollo experimental en el campo de las  ciencias  sociales y las humanidades.";
        $actividadEconomica533->save();
        
        $actividadEconomica534 = new economic_activity();
        $actividadEconomica534->EconomicActivity_number=7721;
        $actividadEconomica534->description_EconomicActivity="Alquiler y arrendamiento de equipo recreativo y deportivo.";
        $actividadEconomica534->save();
        
        $actividadEconomica535 = new economic_activity();
        $actividadEconomica535->EconomicActivity_number=7722;
        $actividadEconomica535->description_EconomicActivity="Alquiler de videos y discos.";
        $actividadEconomica535->save();
        
        $actividadEconomica536 = new economic_activity();
        $actividadEconomica536->EconomicActivity_number=7729;
        $actividadEconomica536->description_EconomicActivity="Alquiler y arrendamiento de otros efectos personales y enseres domésticos n.c.p.";
        $actividadEconomica536->save();
        
        $actividadEconomica537 = new economic_activity();
        $actividadEconomica537->EconomicActivity_number=7911;
        $actividadEconomica537->description_EconomicActivity="Actividades de las agencias de viaje.";
        $actividadEconomica537->save();
        
        $actividadEconomica538 = new economic_activity();
        $actividadEconomica538->EconomicActivity_number=7912;
        $actividadEconomica538->description_EconomicActivity="Actividades de operadores turísticos.";
        $actividadEconomica538->save();
        
        $actividadEconomica539 = new economic_activity();
        $actividadEconomica539->EconomicActivity_number=8121;
        $actividadEconomica539->description_EconomicActivity="Limpieza general interior de edificios.";
        $actividadEconomica539->save();
        
        $actividadEconomica540 = new economic_activity();
        $actividadEconomica540->EconomicActivity_number=8129;
        $actividadEconomica540->description_EconomicActivity="Otras actividades de limpieza de edificios e instalaciones industriales.";
        $actividadEconomica540->save();
        
        $actividadEconomica541 = new economic_activity();
        $actividadEconomica541->EconomicActivity_number=8211;
        $actividadEconomica541->description_EconomicActivity="Actividades combinadas de servicios administrativos de oficina";
        $actividadEconomica541->save();
        
        $actividadEconomica542 = new economic_activity();
        $actividadEconomica542->EconomicActivity_number=8219;
        $actividadEconomica542->description_EconomicActivity="Fotocopiado, preparación de documentos y otras actividades especializadas de apoyo a oficina.";
        $actividadEconomica542->save();
        
        $actividadEconomica543 = new economic_activity();
        $actividadEconomica543->EconomicActivity_number=8291;
        $actividadEconomica543->description_EconomicActivity="Actividades de agencias de cobranza y oficinas de calificación crediticia.";
        $actividadEconomica543->save();
        
        $actividadEconomica544 = new economic_activity();
        $actividadEconomica544->EconomicActivity_number=8292;
        $actividadEconomica544->description_EconomicActivity="Actividades de envase y empaque.";
        $actividadEconomica544->save();
        
        $actividadEconomica545 = new economic_activity();
        $actividadEconomica545->EconomicActivity_number=8299;
        $actividadEconomica545->description_EconomicActivity="Otras actividades de servicio de apoyo a las empresas n.c.p.";
        $actividadEconomica545->save();
        
        $actividadEconomica546 = new economic_activity();
        $actividadEconomica546->EconomicActivity_number=8411;
        $actividadEconomica546->description_EconomicActivity="Actividades legislativas de la administración pública.";
        $actividadEconomica546->save();
        
        $actividadEconomica547 = new economic_activity();
        $actividadEconomica547->EconomicActivity_number=8412;
        $actividadEconomica547->description_EconomicActivity="Actividades ejecutivas de la administración pública.";
        $actividadEconomica547->save();
        
        $actividadEconomica548 = new economic_activity();
        $actividadEconomica548->EconomicActivity_number=8413;
        $actividadEconomica548->description_EconomicActivity="Regulación de las actividades de organismos que prestan servicios de salud, educativos, culturales.y otros servicios sociales, excepto servicios de seguridad social.";
        $actividadEconomica548->save();
        
        $actividadEconomica549 = new economic_activity();
        $actividadEconomica549->EconomicActivity_number=8414;
        $actividadEconomica549->description_EconomicActivity="Actividades reguladoras y facilitadoras de la actividad económica.";
        $actividadEconomica549->save();
        
        $actividadEconomica550 = new economic_activity();
        $actividadEconomica550->EconomicActivity_number=8415;
        $actividadEconomica550->description_EconomicActivity="Actividades de los otros órganos de control.";
        $actividadEconomica550->save();
        
        $actividadEconomica551 = new economic_activity();
        $actividadEconomica551->EconomicActivity_number=8421;
        $actividadEconomica551->description_EconomicActivity="Relaciones exteriores.";
        $actividadEconomica551->save();
        
        $actividadEconomica552 = new economic_activity();
        $actividadEconomica552->EconomicActivity_number=8422;
        $actividadEconomica552->description_EconomicActivity="Actividades de defensa.";
        $actividadEconomica552->save();
        
        $actividadEconomica553 = new economic_activity();
        $actividadEconomica553->EconomicActivity_number=8423;
        $actividadEconomica553->description_EconomicActivity="Orden público y actividades de seguridad.";
        $actividadEconomica553->save();
        
        $actividadEconomica554 = new economic_activity();
        $actividadEconomica554->EconomicActivity_number=8424;
        $actividadEconomica554->description_EconomicActivity="Administración de justicia.";
        $actividadEconomica554->save();
        
        $actividadEconomica555 = new economic_activity();
        $actividadEconomica555->EconomicActivity_number=8511;
        $actividadEconomica555->description_EconomicActivity="Educación de la primera infancia.";
        $actividadEconomica555->save();
        
        $actividadEconomica556 = new economic_activity();
        $actividadEconomica556->EconomicActivity_number=8512;
        $actividadEconomica556->description_EconomicActivity="Educación preescolar.";
        $actividadEconomica556->save();
        
        $actividadEconomica557 = new economic_activity();
        $actividadEconomica557->EconomicActivity_number=8513;
        $actividadEconomica557->description_EconomicActivity="Educación básica primaria.";
        $actividadEconomica557->save();
        
        $actividadEconomica558 = new economic_activity();
        $actividadEconomica558->EconomicActivity_number=8521;
        $actividadEconomica558->description_EconomicActivity="Educación básica secundaria.";
        $actividadEconomica558->save();
        
        $actividadEconomica559 = new economic_activity();
        $actividadEconomica559->EconomicActivity_number=8522;
        $actividadEconomica559->description_EconomicActivity="Educación media académica.";
        $actividadEconomica559->save();
        
        $actividadEconomica560 = new economic_activity();
        $actividadEconomica560->EconomicActivity_number=8523;
        $actividadEconomica560->description_EconomicActivity="Educación media técnica y de formación laboral.";
        $actividadEconomica560->save();
        
        $actividadEconomica561 = new economic_activity();
        $actividadEconomica561->EconomicActivity_number=8541;
        $actividadEconomica561->description_EconomicActivity="Educación técnica profesional.";
        $actividadEconomica561->save();
        
        $actividadEconomica562 = new economic_activity();
        $actividadEconomica562->EconomicActivity_number=8542;
        $actividadEconomica562->description_EconomicActivity="Educación tecnológica.";
        $actividadEconomica562->save();
        
        $actividadEconomica563 = new economic_activity();
        $actividadEconomica563->EconomicActivity_number=8543;
        $actividadEconomica563->description_EconomicActivity="Educación de instituciones universitarias o de escuelas tecnológicas.";
        $actividadEconomica563->save();
        
        $actividadEconomica564 = new economic_activity();
        $actividadEconomica564->EconomicActivity_number=8544;
        $actividadEconomica564->description_EconomicActivity="Educación de universidades.";
        $actividadEconomica564->save();
        
        $actividadEconomica565 = new economic_activity();
        $actividadEconomica565->EconomicActivity_number=8551;
        $actividadEconomica565->description_EconomicActivity="Formación académica no formal.";
        $actividadEconomica565->save();
        
        $actividadEconomica566 = new economic_activity();
        $actividadEconomica566->EconomicActivity_number=8552;
        $actividadEconomica566->description_EconomicActivity="Enseñanza deportiva y recreativa.";
        $actividadEconomica566->save();
        
        $actividadEconomica567 = new economic_activity();
        $actividadEconomica567->EconomicActivity_number=8553;
        $actividadEconomica567->description_EconomicActivity="Enseñanza cultural.";
        $actividadEconomica567->save();
        
        $actividadEconomica568 = new economic_activity();
        $actividadEconomica568->EconomicActivity_number=8559;
        $actividadEconomica568->description_EconomicActivity="Otros tipos de educación n.c.p.";
        $actividadEconomica568->save();
        
        $actividadEconomica569 = new economic_activity();
        $actividadEconomica569->EconomicActivity_number=8621;
        $actividadEconomica569->description_EconomicActivity="Actividades de la práctica médica, sin internación.";
        $actividadEconomica569->save();
        
        $actividadEconomica570 = new economic_activity();
        $actividadEconomica570->EconomicActivity_number=8622;
        $actividadEconomica570->description_EconomicActivity="Actividades de la práctica odontológica.";
        $actividadEconomica570->save();
        
        $actividadEconomica571 = new economic_activity();
        $actividadEconomica571->EconomicActivity_number=8691;
        $actividadEconomica571->description_EconomicActivity="Actividades de apoyo diagnóstico.";
        $actividadEconomica571->save();
        
        $actividadEconomica572 = new economic_activity();
        $actividadEconomica572->EconomicActivity_number=8692;
        $actividadEconomica572->description_EconomicActivity="Actividades de apoyo terapéutico.";
        $actividadEconomica572->save();
        
        $actividadEconomica573 = new economic_activity();
        $actividadEconomica573->EconomicActivity_number=8699;
        $actividadEconomica573->description_EconomicActivity="Otras actividades de atención de la salud humana.";
        $actividadEconomica573->save();
        
        $actividadEconomica574 = new economic_activity();
        $actividadEconomica574->EconomicActivity_number=8790;
        $actividadEconomica574->description_EconomicActivity="Otras actividades de atención en instituciones con alojamiento";
        $actividadEconomica574->save();
        
        $actividadEconomica575 = new economic_activity();
        $actividadEconomica575->EconomicActivity_number=9001;
        $actividadEconomica575->description_EconomicActivity="Creación literaria.";
        $actividadEconomica575->save();
        
        $actividadEconomica576 = new economic_activity();
        $actividadEconomica576->EconomicActivity_number=9002;
        $actividadEconomica576->description_EconomicActivity="Creación musical.";
        $actividadEconomica576->save();
        
        $actividadEconomica577 = new economic_activity();
        $actividadEconomica577->EconomicActivity_number=9003;
        $actividadEconomica577->description_EconomicActivity="Creación teatral.";
        $actividadEconomica577->save();
        
        $actividadEconomica578 = new economic_activity();
        $actividadEconomica578->EconomicActivity_number=9004;
        $actividadEconomica578->description_EconomicActivity="Creación audiovisual.";
        $actividadEconomica578->save();
        
        $actividadEconomica579 = new economic_activity();
        $actividadEconomica579->EconomicActivity_number=9005;
        $actividadEconomica579->description_EconomicActivity="Artes plásticas y visuales.";
        $actividadEconomica579->save();
        
        $actividadEconomica580 = new economic_activity();
        $actividadEconomica580->EconomicActivity_number=9006;
        $actividadEconomica580->description_EconomicActivity="Actividades teatrales.";
        $actividadEconomica580->save();
        
        $actividadEconomica581 = new economic_activity();
        $actividadEconomica581->EconomicActivity_number=9007;
        $actividadEconomica581->description_EconomicActivity="Actividades de espectáculos musicales en vivo.";
        $actividadEconomica581->save();
        
        $actividadEconomica582 = new economic_activity();
        $actividadEconomica582->EconomicActivity_number=9008;
        $actividadEconomica582->description_EconomicActivity="Otras actividades de espectáculos en vivo.";
        $actividadEconomica582->save();
        
        $actividadEconomica583 = new economic_activity();
        $actividadEconomica583->EconomicActivity_number=9101;
        $actividadEconomica583->description_EconomicActivity="Actividades de bibliotecas y archivos.";
        $actividadEconomica583->save();
        
        $actividadEconomica584 = new economic_activity();
        $actividadEconomica584->EconomicActivity_number=9102;
        $actividadEconomica584->description_EconomicActivity="Actividades y funcionamiento de museos, conservación de edificios y sitios históricos.";
        $actividadEconomica584->save();
        
        $actividadEconomica585 = new economic_activity();
        $actividadEconomica585->EconomicActivity_number=9103;
        $actividadEconomica585->description_EconomicActivity="Actividades de jardines botánicos, zoológicos y reservas naturales.";
        $actividadEconomica585->save();
        
        $actividadEconomica586 = new economic_activity();
        $actividadEconomica586->EconomicActivity_number=9311;
        $actividadEconomica586->description_EconomicActivity="Gestión de instalaciones deportivas.";
        $actividadEconomica586->save();
        
        $actividadEconomica587 = new economic_activity();
        $actividadEconomica587->EconomicActivity_number=9312;
        $actividadEconomica587->description_EconomicActivity="Actividades de clubes deportivos.";
        $actividadEconomica587->save();
        
        $actividadEconomica588 = new economic_activity();
        $actividadEconomica588->EconomicActivity_number=9319;
        $actividadEconomica588->description_EconomicActivity="Otras actividades deportivas.";
        $actividadEconomica588->save();
        
        $actividadEconomica589 = new economic_activity();
        $actividadEconomica589->EconomicActivity_number=9321;
        $actividadEconomica589->description_EconomicActivity="Actividades de parques de atracciones y parques temáticos.";
        $actividadEconomica589->save();
        
        $actividadEconomica590 = new economic_activity();
        $actividadEconomica590->EconomicActivity_number=9329;
        $actividadEconomica590->description_EconomicActivity="Otras actividades recreativas y de esparcimiento n.c.p.";
        $actividadEconomica590->save();
        
        $actividadEconomica591 = new economic_activity();
        $actividadEconomica591->EconomicActivity_number=9411;
        $actividadEconomica591->description_EconomicActivity="Actividades de asociaciones empresariales y de empleadores";
        $actividadEconomica591->save();
        
        $actividadEconomica592 = new economic_activity();
        $actividadEconomica592->EconomicActivity_number=9412;
        $actividadEconomica592->description_EconomicActivity="Actividades de asociaciones profesionales";
        $actividadEconomica592->save();
        
        $actividadEconomica593 = new economic_activity();
        $actividadEconomica593->EconomicActivity_number=9491;
        $actividadEconomica593->description_EconomicActivity="Actividades de asociaciones religiosas.";
        $actividadEconomica593->save();
        
        $actividadEconomica594 = new economic_activity();
        $actividadEconomica594->EconomicActivity_number=9492;
        $actividadEconomica594->description_EconomicActivity="Actividades de asociaciones políticas.";
        $actividadEconomica594->save();
        
        $actividadEconomica595 = new economic_activity();
        $actividadEconomica595->EconomicActivity_number=9499;
        $actividadEconomica595->description_EconomicActivity="Actividades de otras asociaciones n.c.p.";
        $actividadEconomica595->save();
        
        $actividadEconomica596 = new economic_activity();
        $actividadEconomica596->EconomicActivity_number=9511;
        $actividadEconomica596->description_EconomicActivity="Mantenimiento y reparación de computadores y de equipo periférico.";
        $actividadEconomica596->save();
        
        $actividadEconomica597 = new economic_activity();
        $actividadEconomica597->EconomicActivity_number=9512;
        $actividadEconomica597->description_EconomicActivity="Mantenimiento y reparación de equipos de comunicación.";
        $actividadEconomica597->save();
        
        $actividadEconomica598 = new economic_activity();
        $actividadEconomica598->EconomicActivity_number=9521;
        $actividadEconomica598->description_EconomicActivity="Mantenimiento y reparación de aparatos electrónicos de consumo.";
        $actividadEconomica598->save();
        
        $actividadEconomica599 = new economic_activity();
        $actividadEconomica599->EconomicActivity_number=9522;
        $actividadEconomica599->description_EconomicActivity="Mantenimiento y reparación de aparatos y equipos domésticos y de jardinería.";
        $actividadEconomica599->save();
        
        $actividadEconomica600 = new economic_activity();
        $actividadEconomica600->EconomicActivity_number=9523;
        $actividadEconomica600->description_EconomicActivity="Reparación de calzado y artículos de cuero.";
        $actividadEconomica600->save();
        
        $actividadEconomica601 = new economic_activity();
        $actividadEconomica601->EconomicActivity_number=9524;
        $actividadEconomica601->description_EconomicActivity="Reparación de muebles y accesorios para el hogar.";
        $actividadEconomica601->save();
        
        $actividadEconomica602 = new economic_activity();
        $actividadEconomica602->EconomicActivity_number=9529;
        $actividadEconomica602->description_EconomicActivity="Mantenimiento y reparación de otros efectos personales y enseres domésticos.";
        $actividadEconomica602->save();
        
        $actividadEconomica603 = new economic_activity();
        $actividadEconomica603->EconomicActivity_number=9601;
        $actividadEconomica603->description_EconomicActivity="Lavado y limpieza, incluso la limpieza en seco, de productos textiles y de piel.";
        $actividadEconomica603->save();
        
        $actividadEconomica604 = new economic_activity();
        $actividadEconomica604->EconomicActivity_number=9602;
        $actividadEconomica604->description_EconomicActivity="Peluquería y otros tratamientos de belleza.";
        $actividadEconomica604->save();
        
        $actividadEconomica605 = new economic_activity();
        $actividadEconomica605->EconomicActivity_number=9603;
        $actividadEconomica605->description_EconomicActivity="Pompas fúnebres y actividades relacionadas.";
        $actividadEconomica605->save();
        
        $actividadEconomica606 = new economic_activity();
        $actividadEconomica606->EconomicActivity_number=9609;
        $actividadEconomica606->description_EconomicActivity="Otras actividades de servicios personales n.c.p.";
        $actividadEconomica606->save();
    }
}
