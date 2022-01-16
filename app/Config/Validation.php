<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $esportErrors = [
		'leaderName' => [
			'rules' => 'required|min_length[3]|max_length[32]',
			'errors' => [
				'required' => 'Nie podano nazwy lidera drużyny!',
				'min_length' => 'Nazwa lidera musi być dłuższa niż 3 znaki!',
				'max_length' => 'Nazwa lidera nie moze być dłuższa niż 32 znaki!'
			]
		],
		'leaderEmail' => [
			'rules' => 'required|valid_email|is_unique[forms_esport.leader_email]',
			'errors' => [
					'required' => 'Nie podano adresu e-mail lidera drużyny!',
					'valid_email' => 'Podany adres e-mail nie jest prawidłowym adresem e-mail!',
					'is_unique' => 'Ten e-mail jest już używany, prosimy o kontakt z Administracją.'
			]
		],
		'leaderUID' => [
			'rules' => 'regex_match[/^[a-zA-z0-9\+=\-\/]{27}=$/]',
			'errors' => [
				'regex_match' => 'Podano nieprawidłowe UID! Jeśli nie wiesz jak zdobyć swoje UID to poproś o pomoc Administracje Serwera.'
			]
		],
		'teamName' => [
			'rules' => 'required|min_length[3]|max_length[32]',
			'errors' => [
				'required' => 'Nie podano nazwy drużyny!',
				'min_length' => 'Nazwa drużyny musi być dłuższa niż 3 znaki!',
				'max_length' => 'Nazwa drużyny nie moze być dłuższa niż 32 znaki!'
			]
		],
		'teamTag' => [
			'rules' => 'required|min_length[3]|max_length[16]',
			'errors' => [
				'required' => 'Nie podano TAGu drużyny!',
				'min_length' => 'TAG drużyny musi być dłuższy niż 3 znaki!',
				'max_length' => 'TAG drużyny nie może być dłuższy niż 16 znaków!'
			]
		],
		// 'teamLogo' => [
		// 	'rules' => 'permit_empty',
		// 	'errors' => [
		// 		'required' => 'Musisz załączyć logo drużyny!',
		// 		'max_size' => 'Logo drużyny nie może być większe niż 2MB',
		// 		'mime_in' => 'Logo drużyny musi być plikiem z rozszerzeniem .png'
		// 	]
		// ],
		'teamFacebook' => [
			'rules' => 'regex_match[/^https:\/\/www\.facebook\.(com|pl)\/[a-zA-z0-9+-.,_]+(\/|)$/]',
			'errors' => [
				'regex_match' => 'Podano nieprawidłowy adres URL strony facebook drużyny'
			]
		],
		// 'teamWebsite' => [
		// 	'rules' => 'valid_url',
		// 	'errors' => [
		// 		'valid_url' => 'Podano nieprawidłowy adres URL strony drużyny'
		// 	]
		// ],
		'privacyPolicy' => [
			'rules' => 'equals[1]',
			'errors' => [
				'equals' => 'Musisz przeczytać i zaakceptować warunki przetwarzania danych oraz warunki współpracy!'
			]
		]
	];
	
	public $tournamentErrors = [
		'teamName' => [
			'rules' => 'required|min_length[8]|max_length[80]',
			'errors' => [
				'required' => 'Musisz podać nazwę drużyny!',
				'min_length' => 'Nazwa drużyny nie może być krótsza niż 8 znaków',
				'max_length' => 'Nazwa drużyny nie może przekraczać 80 znaków!'
			]
		],

		'teamTag' => [
			'rules' => 'required|min_length[3]|max_length[15]',
			'errors' => [
				'required' => 'Musisz podać TAG drużyny!',
				'min_length' => 'TAG drużyny musi się składać z conajmniej 3 znaków',
				'max_length' => 'TAG drużyny nie może być dłuższy niż 15 znaków!'
			]
		],

		'teamFacebook' => [
			'rules' => 'regex_match[/^https:\/\/(www\.|)facebook\.(com|pl)\/[a-zA-z0-9+-.,_]+(\/|)$/]',
			'errors' => [
				'regex_match' => 'Podano nieprawidłowy adres URL strony Facebook drużyny'
			]
		],

		'teamLeader' => [
			'rules' => 'regex_match[/^https:\/\/(www\.|)facebook\.(com|pl)\/[a-zA-z0-9+-.,_?=]+(\/|)$/]',
			'errors' => [
				'regex_match' => 'Podano nieprawidłowy adres URL profilu Facebook'
			]
		],

		'teamLogo' => [
			'rules' => 'uploaded[teamLogo]|mime_in[teamLogo,image/png]|max_size[teamLogo,2000]|max_dims[teamLogo,2048,2048]',
			'errors' => [
				'uploaded' => 'Musisz wysłać logo drużyny!',
				'mime_in' => 'Logo musi być w formacie PNG!',
				'max_size' => 'Wysłany plik jest zbyt duży, dozwolona wielkość to 2MB!',
				'max_dims' => 'Wysłany plik ma zbyt duże rozmiary, dozwolone rozmiary to 2048x2048!'
			]
		],

		'teamCoach' => [
			'rules' => 'max_length[120]|permit_empty',
			'errors' => [
				'max_length' => 'Nick Trenera nie moze być dłuższy niż 120 znaków'
			]
		],

		'teamCoachSteam' => [
			'rules' => 'regex_match[/^https:\/\/steamcommunity\.com\/(id|profiles)\/[a-zA-z0-9+-.,_]+(\/|)$/]|permit_empty',
			'errors' => [
				'regex_match' => 'Adres steam do profilu trenera jest nieprawdiłowy'
			]
		],

		'teamPlayers' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Musisz podać nicki wszystkich graczy'
			]
		],

		'teamPlayersSteam' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Musisz podać adresy profili Steam wszystkich graczy'
			]
		],

		'teamPlayersFaceit' => [
			'rules' => 'required',
			'errors' => [
				'required' => 'Musisz podać adresy profili FaceIt wszystkich graczy'
			]
			],
	];
}
