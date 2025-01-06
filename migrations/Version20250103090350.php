<?php

namespace HydraSupersetBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250103090350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Populates pays table.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (4, 'AF', 'AFG', 'Afghanistan', 'Afghanistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (8, 'AL', 'ALB', 'Albania', 'Albanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (10, 'AQ', 'ATA', 'Antarctica', 'Antarctique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (12, 'DZ', 'DZA', 'Algeria', 'Algérie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (16, 'AS', 'ASM', 'American Samoa', 'Samoa Américaines')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (20, 'AD', 'AND', 'Andorra', 'Andorre')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (24, 'AO', 'AGO', 'Angola', 'Angola')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (28, 'AG', 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (31, 'AZ', 'AZE', 'Azerbaijan', 'Azerbaïdjan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (32, 'AR', 'ARG', 'Argentina', 'Argentine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (36, 'AU', 'AUS', 'Australia', 'Australie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (40, 'AT', 'AUT', 'Austria', 'Autriche')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (44, 'BS', 'BHS', 'Bahamas', 'Bahamas')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (48, 'BH', 'BHR', 'Bahrain', 'Bahreïn')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (50, 'BD', 'BGD', 'Bangladesh', 'Bangladesh')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (51, 'AM', 'ARM', 'Armenia', 'Arménie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (52, 'BB', 'BRB', 'Barbados', 'Barbade')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (56, 'BE', 'BEL', 'Belgium', 'Belgique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (60, 'BM', 'BMU', 'Bermuda', 'Bermudes')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (64, 'BT', 'BTN', 'Bhutan', 'Bhoutan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (68, 'BO', 'BOL', 'Bolivia', 'Bolivie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (70, 'BA', 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (72, 'BW', 'BWA', 'Botswana', 'Botswana')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (74, 'BV', 'BVT', 'Bouvet Island', 'Île Bouvet')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (76, 'BR', 'BRA', 'Brazil', 'Brésil')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (84, 'BZ', 'BLZ', 'Belize', 'Belize')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (86, 'IO', 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l''Océan Indien')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (90, 'SB', 'SLB', 'Solomon Islands', 'Îles Salomon')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (92, 'VG', 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (96, 'BN', 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (100, 'BG', 'BGR', 'Bulgaria', 'Bulgarie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (104, 'MM', 'MMR', 'Myanmar', 'Myanmar')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (108, 'BI', 'BDI', 'Burundi', 'Burundi')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (112, 'BY', 'BLR', 'Belarus', 'Bélarus')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (116, 'KH', 'KHM', 'Cambodia', 'Cambodge')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (120, 'CM', 'CMR', 'Cameroon', 'Cameroun')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (124, 'CA', 'CAN', 'Canada', 'Canada')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (132, 'CV', 'CPV', 'Cape Verde', 'Cap-vert')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (136, 'KY', 'CYM', 'Cayman Islands', 'Îles Caïmanes')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (140, 'CF', 'CAF', 'Central African', 'République Centrafricaine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (144, 'LK', 'LKA', 'Sri Lanka', 'Sri Lanka')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (148, 'TD', 'TCD', 'Chad', 'Tchad')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (152, 'CL', 'CHL', 'Chile', 'Chili')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (156, 'CN', 'CHN', 'China', 'Chine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (158, 'TW', 'TWN', 'Taiwan', 'Taïwan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (162, 'CX', 'CXR', 'Christmas Island', 'Île Christmas')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (166, 'CC', 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (170, 'CO', 'COL', 'Colombia', 'Colombie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (174, 'KM', 'COM', 'Comoros', 'Comores')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (175, 'YT', 'MYT', 'Mayotte', 'Mayotte')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (178, 'CG', 'COG', 'Republic of the Congo', 'République du Congo')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (180, 'CD', 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (184, 'CK', 'COK', 'Cook Islands', 'Îles Cook')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (188, 'CR', 'CRI', 'Costa Rica', 'Costa Rica')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (191, 'HR', 'HRV', 'Croatia', 'Croatie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (192, 'CU', 'CUB', 'Cuba', 'Cuba')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (196, 'CY', 'CYP', 'Cyprus', 'Chypre')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (203, 'CZ', 'CZE', 'Czech Republic', 'République Tchèque')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (204, 'BJ', 'BEN', 'Benin', 'Bénin')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (208, 'DK', 'DNK', 'Denmark', 'Danemark')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (212, 'DM', 'DMA', 'Dominica', 'Dominique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (214, 'DO', 'DOM', 'Dominican Republic', 'République Dominicaine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (218, 'EC', 'ECU', 'Ecuador', 'Équateur')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (222, 'SV', 'SLV', 'El Salvador', 'El Salvador')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (226, 'GQ', 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (231, 'ET', 'ETH', 'Ethiopia', 'Éthiopie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (232, 'ER', 'ERI', 'Eritrea', 'Érythrée')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (233, 'EE', 'EST', 'Estonia', 'Estonie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (234, 'FO', 'FRO', 'Faroe Islands', 'Îles Féroé')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (238, 'FK', 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (239, 'GS', 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (242, 'FJ', 'FJI', 'Fiji', 'Fidji')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (246, 'FI', 'FIN', 'Finland', 'Finlande')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (248, 'AX', 'ALA', 'Åland Islands', 'Îles Åland')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (250, 'FR', 'FRA', 'France', 'France')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (254, 'GF', 'GUF', 'French Guiana', 'Guyane Française')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (258, 'PF', 'PYF', 'French Polynesia', 'Polynésie Française')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (260, 'TF', 'ATF', 'French Southern Territories', 'Terres Australes Françaises')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (262, 'DJ', 'DJI', 'Djibouti', 'Djibouti')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (266, 'GA', 'GAB', 'Gabon', 'Gabon')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (268, 'GE', 'GEO', 'Georgia', 'Géorgie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (270, 'GM', 'GMB', 'Gambia', 'Gambie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (275, 'PS', 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (276, 'DE', 'DEU', 'Germany', 'Allemagne')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (288, 'GH', 'GHA', 'Ghana', 'Ghana')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (292, 'GI', 'GIB', 'Gibraltar', 'Gibraltar')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (296, 'KI', 'KIR', 'Kiribati', 'Kiribati')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (300, 'GR', 'GRC', 'Greece', 'Grèce')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (304, 'GL', 'GRL', 'Greenland', 'Groenland')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (308, 'GD', 'GRD', 'Grenada', 'Grenade')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (312, 'GP', 'GLP', 'Guadeloupe', 'Guadeloupe')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (316, 'GU', 'GUM', 'Guam', 'Guam')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (320, 'GT', 'GTM', 'Guatemala', 'Guatemala')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (324, 'GN', 'GIN', 'Guinea', 'Guinée')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (328, 'GY', 'GUY', 'Guyana', 'Guyana')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (332, 'HT', 'HTI', 'Haiti', 'Haïti')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (334, 'HM', 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (336, 'VA', 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (340, 'HN', 'HND', 'Honduras', 'Honduras')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (344, 'HK', 'HKG', 'Hong Kong', 'Hong-Kong')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (348, 'HU', 'HUN', 'Hungary', 'Hongrie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (352, 'IS', 'ISL', 'Iceland', 'Islande')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (356, 'IN', 'IND', 'India', 'Inde')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (360, 'ID', 'IDN', 'Indonesia', 'Indonésie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (364, 'IR', 'IRN', 'Islamic Republic of Iran', 'République Islamique d''Iran')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (368, 'IQ', 'IRQ', 'Iraq', 'Iraq')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (372, 'IE', 'IRL', 'Ireland', 'Irlande')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (376, 'IL', 'ISR', 'Israel', 'Israël')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (380, 'IT', 'ITA', 'Italy', 'Italie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (384, 'CI', 'CIV', 'Côte d''Ivoire', 'Côte d''Ivoire')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (388, 'JM', 'JAM', 'Jamaica', 'Jamaïque')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (392, 'JP', 'JPN', 'Japan', 'Japon')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (398, 'KZ', 'KAZ', 'Kazakhstan', 'Kazakhstan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (400, 'JO', 'JOR', 'Jordan', 'Jordanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (404, 'KE', 'KEN', 'Kenya', 'Kenya')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (408, 'KP', 'PRK', 'Democratic People''s Republic of Korea', 'République Populaire Démocratique de Corée')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (410, 'KR', 'KOR', 'Republic of Korea', 'République de Corée')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (414, 'KW', 'KWT', 'Kuwait', 'Koweït')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (417, 'KG', 'KGZ', 'Kyrgyzstan', 'Kirghizistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (418, 'LA', 'LAO', 'Lao People''s Democratic Republic', 'République Démocratique Populaire Lao')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (422, 'LB', 'LBN', 'Lebanon', 'Liban')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (426, 'LS', 'LSO', 'Lesotho', 'Lesotho')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (428, 'LV', 'LVA', 'Latvia', 'Lettonie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (430, 'LR', 'LBR', 'Liberia', 'Libéria')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (434, 'LY', 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (438, 'LI', 'LIE', 'Liechtenstein', 'Liechtenstein')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (440, 'LT', 'LTU', 'Lithuania', 'Lituanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (442, 'LU', 'LUX', 'Luxembourg', 'Luxembourg')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (446, 'MO', 'MAC', 'Macao', 'Macao')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (450, 'MG', 'MDG', 'Madagascar', 'Madagascar')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (454, 'MW', 'MWI', 'Malawi', 'Malawi')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (458, 'MY', 'MYS', 'Malaysia', 'Malaisie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (462, 'MV', 'MDV', 'Maldives', 'Maldives')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (466, 'ML', 'MLI', 'Mali', 'Mali')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (470, 'MT', 'MLT', 'Malta', 'Malte')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (474, 'MQ', 'MTQ', 'Martinique', 'Martinique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (478, 'MR', 'MRT', 'Mauritania', 'Mauritanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (480, 'MU', 'MUS', 'Mauritius', 'Maurice')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (484, 'MX', 'MEX', 'Mexico', 'Mexique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (492, 'MC', 'MCO', 'Monaco', 'Monaco')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (496, 'MN', 'MNG', 'Mongolia', 'Mongolie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (498, 'MD', 'MDA', 'Republic of Moldova', 'République de Moldova')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (500, 'MS', 'MSR', 'Montserrat', 'Montserrat')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (504, 'MA', 'MAR', 'Morocco', 'Maroc')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (508, 'MZ', 'MOZ', 'Mozambique', 'Mozambique')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (512, 'OM', 'OMN', 'Oman', 'Oman')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (516, 'NA', 'NAM', 'Namibia', 'Namibie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (520, 'NR', 'NRU', 'Nauru', 'Nauru')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (524, 'NP', 'NPL', 'Nepal', 'Népal')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (528, 'NL', 'NLD', 'Netherlands', 'Pays-Bas')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (530, 'AN', 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (533, 'AW', 'ABW', 'Aruba', 'Aruba')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (540, 'NC', 'NCL', 'New Caledonia', 'Nouvelle-Calédonie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (548, 'VU', 'VUT', 'Vanuatu', 'Vanuatu')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (554, 'NZ', 'NZL', 'New Zealand', 'Nouvelle-Zélande')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (558, 'NI', 'NIC', 'Nicaragua', 'Nicaragua')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (562, 'NE', 'NER', 'Niger', 'Niger')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (566, 'NG', 'NGA', 'Nigeria', 'Nigéria')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (570, 'NU', 'NIU', 'Niue', 'Niué')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (574, 'NF', 'NFK', 'Norfolk Island', 'Île Norfolk')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (578, 'NO', 'NOR', 'Norway', 'Norvège')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (580, 'MP', 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (581, 'UM', 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (583, 'FM', 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (584, 'MH', 'MHL', 'Marshall Islands', 'Îles Marshall')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (585, 'PW', 'PLW', 'Palau', 'Palaos')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (586, 'PK', 'PAK', 'Pakistan', 'Pakistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (591, 'PA', 'PAN', 'Panama', 'Panama')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (598, 'PG', 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (600, 'PY', 'PRY', 'Paraguay', 'Paraguay')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (604, 'PE', 'PER', 'Peru', 'Pérou')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (608, 'PH', 'PHL', 'Philippines', 'Philippines')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (612, 'PN', 'PCN', 'Pitcairn', 'Pitcairn')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (616, 'PL', 'POL', 'Poland', 'Pologne')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (620, 'PT', 'PRT', 'Portugal', 'Portugal')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (624, 'GW', 'GNB', 'Guinea-Bissau', 'Guinée-Bissau')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (626, 'TL', 'TLS', 'Timor-Leste', 'Timor-Leste')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (630, 'PR', 'PRI', 'Puerto Rico', 'Porto Rico')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (634, 'QA', 'QAT', 'Qatar', 'Qatar')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (638, 'RE', 'REU', 'Réunion', 'Réunion')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (642, 'RO', 'ROU', 'Romania', 'Roumanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (643, 'RU', 'RUS', 'Russian Federation', 'Fédération de Russie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (646, 'RW', 'RWA', 'Rwanda', 'Rwanda')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (654, 'SH', 'SHN', 'Saint Helena', 'Sainte-Hélène')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (659, 'KN', 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (660, 'AI', 'AIA', 'Anguilla', 'Anguilla')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (662, 'LC', 'LCA', 'Saint Lucia', 'Sainte-Lucie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (666, 'PM', 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (670, 'VC', 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (674, 'SM', 'SMR', 'San Marino', 'Saint-Marin')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (678, 'ST', 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (682, 'SA', 'SAU', 'Saudi Arabia', 'Arabie Saoudite')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (686, 'SN', 'SEN', 'Senegal', 'Sénégal')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (690, 'SC', 'SYC', 'Seychelles', 'Seychelles')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (694, 'SL', 'SLE', 'Sierra Leone', 'Sierra Leone')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (702, 'SG', 'SGP', 'Singapore', 'Singapour')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (703, 'SK', 'SVK', 'Slovakia', 'Slovaquie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (704, 'VN', 'VNM', 'Vietnam', 'Viet Nam')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (705, 'SI', 'SVN', 'Slovenia', 'Slovénie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (706, 'SO', 'SOM', 'Somalia', 'Somalie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (710, 'ZA', 'ZAF', 'South Africa', 'Afrique du Sud')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (716, 'ZW', 'ZWE', 'Zimbabwe', 'Zimbabwe')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (724, 'ES', 'ESP', 'Spain', 'Espagne')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (732, 'EH', 'ESH', 'Western Sahara', 'Sahara Occidental')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (736, 'SD', 'SDN', 'Sudan', 'Soudan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (740, 'SR', 'SUR', 'Suriname', 'Suriname')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (744, 'SJ', 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (748, 'SZ', 'SWZ', 'Swaziland', 'Swaziland')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (752, 'SE', 'SWE', 'Sweden', 'Suède')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (756, 'CH', 'CHE', 'Switzerland', 'Suisse')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (760, 'SY', 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (762, 'TJ', 'TJK', 'Tajikistan', 'Tadjikistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (764, 'TH', 'THA', 'Thailand', 'Thaïlande')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (768, 'TG', 'TGO', 'Togo', 'Togo')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (772, 'TK', 'TKL', 'Tokelau', 'Tokelau')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (776, 'TO', 'TON', 'Tonga', 'Tonga')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (780, 'TT', 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (784, 'AE', 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (788, 'TN', 'TUN', 'Tunisia', 'Tunisie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (792, 'TR', 'TUR', 'Turkey', 'Turquie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (795, 'TM', 'TKM', 'Turkmenistan', 'Turkménistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (796, 'TC', 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (798, 'TV', 'TUV', 'Tuvalu', 'Tuvalu')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (800, 'UG', 'UGA', 'Uganda', 'Ouganda')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (804, 'UA', 'UKR', 'Ukraine', 'Ukraine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (807, 'MK', 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L''ex-République Yougoslave de Macédoine')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (818, 'EG', 'EGY', 'Egypt', 'Égypte')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (826, 'GB', 'GBR', 'United Kingdom', 'Royaume-Uni')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (833, 'IM', 'IMN', 'Isle of Man', 'Île de Man')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (834, 'TZ', 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (840, 'US', 'USA', 'United States', 'États-Unis')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (850, 'VI', 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (854, 'BF', 'BFA', 'Burkina Faso', 'Burkina Faso')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (858, 'UY', 'URY', 'Uruguay', 'Uruguay')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (860, 'UZ', 'UZB', 'Uzbekistan', 'Ouzbékistan')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (862, 'VE', 'VEN', 'Venezuela', 'Venezuela')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (876, 'WF', 'WLF', 'Wallis and Futuna', 'Wallis et Futuna')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (882, 'WS', 'WSM', 'Samoa', 'Samoa')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (887, 'YE', 'YEM', 'Yemen', 'Yémen')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (891, 'CS', 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (894, 'ZM', 'ZMB', 'Zambia', 'Zambie')");
        $this->addSql("INSERT INTO public.pays (code, alpha2, alpha3, nom_en_gb, nom_fr_fr) VALUES (499, 'ME', 'MNE', 'Monténégro', 'Monténégro')");

    }
}
