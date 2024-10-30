<?php
namespace CountryFlagsForElementor\Controls;

use Elementor\Base_Data_Control;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Country flag control.
 *
 * A control for creating an country flag control.
 * Displays a country flag select box field.
 *
 * @since 1.0.0
 */
class Country_Flags_Control extends Base_Data_Control
{
	/**
	 * Get control type.
	 *
	 * Retrieve the control type.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Control type.
	 */
    public function get_type()
    {
		return 'country-flags';
	}

	/**
	 * Enqueue scripts and styles.
	 *
	 * Used to register and enqueue custom scripts and styles used by the control.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function enqueue()
	{
		//
	}

	/**
	 * Get options.
	 *
	 * Retrieve all the available options.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @return array Available country flags.
	 */
    public static function get_options()
    {
		return [
			'flag-icon flag-icon-af' => 'Afghanistan',
			'flag-icon flag-icon-ax' => 'Aland Islands',
			'flag-icon flag-icon-al' => 'Albania',
			'flag-icon flag-icon-dz' => 'Algeria',
			'flag-icon flag-icon-as' => 'American Samoa',
			'flag-icon flag-icon-ad' => 'Andorra',
			'flag-icon flag-icon-ao' => 'Angola',
			'flag-icon flag-icon-ai' => 'Anguilla',
			'flag-icon flag-icon-ag' => 'Antigua and Barbuda',
			'flag-icon flag-icon-ar' => 'Argentina',
			'flag-icon flag-icon-am' => 'Armenia',
			'flag-icon flag-icon-aw' => 'Aruba',
			'flag-icon flag-icon-au' => 'Australia',
			'flag-icon flag-icon-at' => 'Austria',
			'flag-icon flag-icon-az' => 'Azerbaijan',
			'flag-icon flag-icon-bs' => 'Bahamas',
			'flag-icon flag-icon-bh' => 'Bahrain',
			'flag-icon flag-icon-bd' => 'Bangladesh',
			'flag-icon flag-icon-bb' => 'Barbados',
			'flag-icon flag-icon-by' => 'Belarus',
			'flag-icon flag-icon-be' => 'Belgium',
			'flag-icon flag-icon-bz' => 'Belize',
			'flag-icon flag-icon-bj' => 'Benin',
			'flag-icon flag-icon-bm' => 'Bermuda',
			'flag-icon flag-icon-bt' => 'Bhutan',
			'flag-icon flag-icon-bo' => 'Bolivia (Plurinational State of)',
			'flag-icon flag-icon-bq' => 'Bonaire, Sint Eustatius and Saba',
			'flag-icon flag-icon-ba' => 'Bosnia and Herzegovina',
			'flag-icon flag-icon-bw' => 'Botswana',
			'flag-icon flag-icon-br' => 'Brazil',
			'flag-icon flag-icon-io' => 'British Indian Ocean Territory',
			'flag-icon flag-icon-bn' => 'Brunei Darussalam',
			'flag-icon flag-icon-bg' => 'Bulgaria',
			'flag-icon flag-icon-bf' => 'Burkina Faso',
			'flag-icon flag-icon-bi' => 'Burundi',
			'flag-icon flag-icon-cv' => 'Cabo Verde',
			'flag-icon flag-icon-kh' => 'Cambodia',
			'flag-icon flag-icon-cm' => 'Cameroon',
			'flag-icon flag-icon-ca' => 'Canada',
			'flag-icon flag-icon-ky' => 'Cayman Islands',
			'flag-icon flag-icon-cf' => 'Central African Republic',
			'flag-icon flag-icon-td' => 'Chad',
			'flag-icon flag-icon-cl' => 'Chile',
			'flag-icon flag-icon-cn' => 'China',
			'flag-icon flag-icon-cx' => 'Christmas Island',
			'flag-icon flag-icon-cc' => 'Cocos (Keeling) Islands',
			'flag-icon flag-icon-co' => 'Colombia',
			'flag-icon flag-icon-km' => 'Comoros',
			'flag-icon flag-icon-ck' => 'Cook Islands',
			'flag-icon flag-icon-cr' => 'Costa Rica',
			'flag-icon flag-icon-hr' => 'Croatia',
			'flag-icon flag-icon-cu' => 'Cuba',
			'flag-icon flag-icon-cw' => 'Curaçao',
			'flag-icon flag-icon-cy' => 'Cyprus',
			'flag-icon flag-icon-cz' => 'Czech Republic',
			'flag-icon flag-icon-ci' => 'Côte d\'Ivoire',
			'flag-icon flag-icon-cd' => 'Democratic Republic of the Congo',
			'flag-icon flag-icon-dk' => 'Denmark',
			'flag-icon flag-icon-dj' => 'Djibouti',
			'flag-icon flag-icon-dm' => 'Dominica',
			'flag-icon flag-icon-do' => 'Dominican Republic',
			'flag-icon flag-icon-ec' => 'Ecuador',
			'flag-icon flag-icon-eg' => 'Egypt',
			'flag-icon flag-icon-sv' => 'El Salvador',
			'flag-icon flag-icon-gq' => 'Equatorial Guinea',
			'flag-icon flag-icon-er' => 'Eritrea',
			'flag-icon flag-icon-ee' => 'Estonia',
			'flag-icon flag-icon-et' => 'Ethiopia',
			'flag-icon flag-icon-fk' => 'Falkland Islands',
			'flag-icon flag-icon-fo' => 'Faroe Islands',
			'flag-icon flag-icon-fm' => 'Federated States of Micronesia',
			'flag-icon flag-icon-fj' => 'Fiji',
			'flag-icon flag-icon-fi' => 'Finland',
			'flag-icon flag-icon-mk' => 'Former Yugoslav Republic of Macedonia',
			'flag-icon flag-icon-fr' => 'France',
			'flag-icon flag-icon-gf' => 'French Guiana',
			'flag-icon flag-icon-pf' => 'French Polynesia',
			'flag-icon flag-icon-tf' => 'French Southern Territories',
			'flag-icon flag-icon-ga' => 'Gabon',
			'flag-icon flag-icon-gm' => 'Gambia',
			'flag-icon flag-icon-ge' => 'Georgia',
			'flag-icon flag-icon-de' => 'Germany',
			'flag-icon flag-icon-gh' => 'Ghana',
			'flag-icon flag-icon-gi' => 'Gibraltar',
			'flag-icon flag-icon-gr' => 'Greece',
			'flag-icon flag-icon-gl' => 'Greenland',
			'flag-icon flag-icon-gd' => 'Grenada',
			'flag-icon flag-icon-gp' => 'Guadeloupe',
			'flag-icon flag-icon-gu' => 'Guam',
			'flag-icon flag-icon-gt' => 'Guatemala',
			'flag-icon flag-icon-gg' => 'Guernsey',
			'flag-icon flag-icon-gn' => 'Guinea',
			'flag-icon flag-icon-gw' => 'Guinea-Bissau',
			'flag-icon flag-icon-gy' => 'Guyana',
			'flag-icon flag-icon-ht' => 'Haiti',
			'flag-icon flag-icon-va' => 'Holy See',
			'flag-icon flag-icon-hn' => 'Honduras',
			'flag-icon flag-icon-hk' => 'Hong Kong',
			'flag-icon flag-icon-hu' => 'Hungary',
			'flag-icon flag-icon-is' => 'Iceland',
			'flag-icon flag-icon-in' => 'India',
			'flag-icon flag-icon-id' => 'Indonesia',
			'flag-icon flag-icon-ir' => 'Iran (Islamic Republic of)',
			'flag-icon flag-icon-iq' => 'Iraq',
			'flag-icon flag-icon-ie' => 'Ireland',
			'flag-icon flag-icon-im' => 'Isle of Man',
			'flag-icon flag-icon-il' => 'Israel',
			'flag-icon flag-icon-it' => 'Italy',
			'flag-icon flag-icon-jm' => 'Jamaica',
			'flag-icon flag-icon-jp' => 'Japan',
			'flag-icon flag-icon-je' => 'Jersey',
			'flag-icon flag-icon-jo' => 'Jordan',
			'flag-icon flag-icon-kz' => 'Kazakhstan',
			'flag-icon flag-icon-ke' => 'Kenya',
			'flag-icon flag-icon-ki' => 'Kiribati',
			'flag-icon flag-icon-kw' => 'Kuwait',
			'flag-icon flag-icon-kg' => 'Kyrgyzstan',
			'flag-icon flag-icon-la' => 'Laos',
			'flag-icon flag-icon-lv' => 'Latvia',
			'flag-icon flag-icon-lb' => 'Lebanon',
			'flag-icon flag-icon-ls' => 'Lesotho',
			'flag-icon flag-icon-lr' => 'Liberia',
			'flag-icon flag-icon-ly' => 'Libya',
			'flag-icon flag-icon-li' => 'Liechtenstein',
			'flag-icon flag-icon-lt' => 'Lithuania',
			'flag-icon flag-icon-lu' => 'Luxembourg',
			'flag-icon flag-icon-mo' => 'Macau',
			'flag-icon flag-icon-mg' => 'Madagascar',
			'flag-icon flag-icon-mw' => 'Malawi',
			'flag-icon flag-icon-my' => 'Malaysia',
			'flag-icon flag-icon-mv' => 'Maldives',
			'flag-icon flag-icon-ml' => 'Mali',
			'flag-icon flag-icon-mt' => 'Malta',
			'flag-icon flag-icon-mh' => 'Marshall Islands',
			'flag-icon flag-icon-mq' => 'Martinique',
			'flag-icon flag-icon-mr' => 'Mauritania',
			'flag-icon flag-icon-mu' => 'Mauritius',
			'flag-icon flag-icon-yt' => 'Mayotte',
			'flag-icon flag-icon-mx' => 'Mexico',
			'flag-icon flag-icon-md' => 'Moldova',
			'flag-icon flag-icon-mc' => 'Monaco',
			'flag-icon flag-icon-mn' => 'Mongolia',
			'flag-icon flag-icon-me' => 'Montenegro',
			'flag-icon flag-icon-ms' => 'Montserrat',
			'flag-icon flag-icon-ma' => 'Morocco',
			'flag-icon flag-icon-mz' => 'Mozambique',
			'flag-icon flag-icon-mm' => 'Myanmar',
			'flag-icon flag-icon-na' => 'Namibia',
			'flag-icon flag-icon-nr' => 'Nauru',
			'flag-icon flag-icon-np' => 'Nepal',
			'flag-icon flag-icon-nl' => 'Netherlands',
			'flag-icon flag-icon-nc' => 'New Caledonia',
			'flag-icon flag-icon-nz' => 'New Zealand',
			'flag-icon flag-icon-ni' => 'Nicaragua',
			'flag-icon flag-icon-ne' => 'Niger',
			'flag-icon flag-icon-ng' => 'Nigeria',
			'flag-icon flag-icon-nu' => 'Niue',
			'flag-icon flag-icon-nf' => 'Norfolk Island',
			'flag-icon flag-icon-kp' => 'North Korea',
			'flag-icon flag-icon-mp' => 'Northern Mariana Islands',
			'flag-icon flag-icon-no' => 'Norway',
			'flag-icon flag-icon-om' => 'Oman',
			'flag-icon flag-icon-pk' => 'Pakistan',
			'flag-icon flag-icon-pw' => 'Palau',
			'flag-icon flag-icon-pa' => 'Panama',
			'flag-icon flag-icon-pg' => 'Papua New Guinea',
			'flag-icon flag-icon-py' => 'Paraguay',
			'flag-icon flag-icon-pe' => 'Peru',
			'flag-icon flag-icon-ph' => 'Philippines',
			'flag-icon flag-icon-pn' => 'Pitcairn',
			'flag-icon flag-icon-pl' => 'Poland',
			'flag-icon flag-icon-pt' => 'Portugal',
			'flag-icon flag-icon-pr' => 'Puerto Rico',
			'flag-icon flag-icon-qa' => 'Qatar',
			'flag-icon flag-icon-cg' => 'Republic of the Congo',
			'flag-icon flag-icon-ro' => 'Romania',
			'flag-icon flag-icon-ru' => 'Russia',
			'flag-icon flag-icon-rw' => 'Rwanda',
			'flag-icon flag-icon-re' => 'Réunion',
			'flag-icon flag-icon-bl' => 'Saint Barthélemy',
			'flag-icon flag-icon-sh' => 'Saint Helena, Ascension and Tristan da Cunha',
			'flag-icon flag-icon-kn' => 'Saint Kitts and Nevis',
			'flag-icon flag-icon-lc' => 'Saint Lucia',
			'flag-icon flag-icon-mf' => 'Saint Martin',
			'flag-icon flag-icon-pm' => 'Saint Pierre and Miquelon',
			'flag-icon flag-icon-vc' => 'Saint Vincent and the Grenadines',
			'flag-icon flag-icon-ws' => 'Samoa',
			'flag-icon flag-icon-sm' => 'San Marino',
			'flag-icon flag-icon-st' => 'Sao Tome and Principe',
			'flag-icon flag-icon-sa' => 'Saudi Arabia',
			'flag-icon flag-icon-sn' => 'Senegal',
			'flag-icon flag-icon-rs' => 'Serbia',
			'flag-icon flag-icon-sc' => 'Seychelles',
			'flag-icon flag-icon-sl' => 'Sierra Leone',
			'flag-icon flag-icon-sg' => 'Singapore',
			'flag-icon flag-icon-sx' => 'Sint Maarten',
			'flag-icon flag-icon-sk' => 'Slovakia',
			'flag-icon flag-icon-si' => 'Slovenia',
			'flag-icon flag-icon-sb' => 'Solomon Islands',
			'flag-icon flag-icon-so' => 'Somalia',
			'flag-icon flag-icon-za' => 'South Africa',
			'flag-icon flag-icon-gs' => 'South Georgia and the South Sandwich Islands',
			'flag-icon flag-icon-kr' => 'South Korea',
			'flag-icon flag-icon-ss' => 'South Sudan',
			'flag-icon flag-icon-es' => 'Spain',
			'flag-icon flag-icon-lk' => 'Sri Lanka',
			'flag-icon flag-icon-ps' => 'State of Palestine',
			'flag-icon flag-icon-sd' => 'Sudan',
			'flag-icon flag-icon-sr' => 'Suriname',
			'flag-icon flag-icon-sj' => 'Svalbard and Jan Mayen',
			'flag-icon flag-icon-sz' => 'Swaziland',
			'flag-icon flag-icon-se' => 'Sweden',
			'flag-icon flag-icon-ch' => 'Switzerland',
			'flag-icon flag-icon-sy' => 'Syrian Arab Republic',
			'flag-icon flag-icon-tw' => 'Taiwan',
			'flag-icon flag-icon-tj' => 'Tajikistan',
			'flag-icon flag-icon-tz' => 'Tanzania',
			'flag-icon flag-icon-th' => 'Thailand',
			'flag-icon flag-icon-tl' => 'Timor-Leste',
			'flag-icon flag-icon-tg' => 'Togo',
			'flag-icon flag-icon-tk' => 'Tokelau',
			'flag-icon flag-icon-to' => 'Tonga',
			'flag-icon flag-icon-tt' => 'Trinidad and Tobago',
			'flag-icon flag-icon-tn' => 'Tunisia',
			'flag-icon flag-icon-tr' => 'Turkey',
			'flag-icon flag-icon-tm' => 'Turkmenistan',
			'flag-icon flag-icon-tc' => 'Turks and Caicos Islands',
			'flag-icon flag-icon-tv' => 'Tuvalu',
			'flag-icon flag-icon-ug' => 'Uganda',
			'flag-icon flag-icon-ua' => 'Ukraine',
			'flag-icon flag-icon-ae' => 'United Arab Emirates',
			'flag-icon flag-icon-gb' => 'United Kingdom',
			'flag-icon flag-icon-um' => 'United States Minor Outlying Islands',
			'flag-icon flag-icon-us' => 'United States of America',
			'flag-icon flag-icon-uy' => 'Uruguay',
			'flag-icon flag-icon-uz' => 'Uzbekistan',
			'flag-icon flag-icon-vu' => 'Vanuatu',
			'flag-icon flag-icon-ve' => 'Venezuela (Bolivarian Republic of)',
			'flag-icon flag-icon-vn' => 'Vietnam',
			'flag-icon flag-icon-vg' => 'Virgin Islands (British)',
			'flag-icon flag-icon-vi' => 'Virgin Islands (U.S.)',
			'flag-icon flag-icon-wf' => 'Wallis and Futuna',
			'flag-icon flag-icon-eh' => 'Western Sahara',
			'flag-icon flag-icon-ye' => 'Yemen',
			'flag-icon flag-icon-zm' => 'Zambia',
			'flag-icon flag-icon-zw' => 'Zimbabwe',
			'flag-icon flag-icon-eu' => 'European Union',
			'flag-icon flag-icon-un' => 'United Nations',
		];
	}

	/**
	 * Get control default settings.
	 *
	 * Retrieve the default settings of the control. Used to return the default
	 * settings while initializing the control.
	 *
	 * @since 1.0.0
	 * @access protected
	 *
	 * @return array Control default settings.
	 */
    protected function get_default_settings()
    {
		return [
			'options' => self::get_options(),
		];
	}

	/**
	 * Render control output in the editor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 1.0.0
	 * @access public
	 */
    public function content_template()
    {
		$control_uid = $this->get_control_uid();
		?>
		<div class="elementor-control-field">
			<label for="<?php echo $control_uid; ?>" class="elementor-control-title">{{{ data.label }}}</label>
			<div class="elementor-control-input-wrapper">
				<select id="<?php echo $control_uid; ?>" class="elementor-control-icon" data-setting="{{ data.name }}" data-placeholder="<?php echo __( 'Select Country Flag', 'country-flags-for-elementor' ); ?>">
					<option value=""><?php echo __( 'Select Country Flag', 'country-flags-for-elementor' ); ?></option>
					<# _.each( data.options, function( option_title, option_value ) { #>
					<option value="{{ option_value }}">{{{ option_title }}}</option>
					<# } ); #>
				</select>
			</div>
		</div>
		<# if ( data.description ) { #>
		<div class="elementor-control-field-description">{{ data.description }}</div>
		<# } #>
		<?php
	}
}
