module.exports = {
	content: [
		'./inc/blocks/*.php',
		'./archive.php',
		'./footer.php',
		'./header.php',
		'./index.php',
		'./single.php',
	],
	darkMode: "class",
  theme: {
    extend: {},
		colors: {
			'amber': {
				100: '#fff8e1',
				200: '#ffecb3',
				300: '#ffe082',
				400: '#F7CE64',
				500: '#deb95a',
				600: '#c69e56',
				700: '#af8c4c',
				800: '#977b3c',
				900: '#856a2c',
			},
			'lime': {
				100: '#afeacd',
				200: '#9be5c1',
				300: '#86dfb4',
				400: '#36CA82',
				500: '#2ba268',
				600: '#1f9357',
				700: '#197b4e',
				800: '#126a45',
				900: '#0e5a3c',
			},
			'rose': {
				100: '#fbe9e7',
				200: '#ffccc7',
				300: '#ffa7a7',
				400: '#C88986',
				500: '#B77C7C',
				600: '#8A575C',
				700: '#7C4C4C',
				800: '#6F4240',
				900: '#633C3C',
			},
		},
		fontFamily: {
			'title': ['Poppins', 'sans-serif'],
			'body': ['Merriweather', 'serif'],
		},
  },
  plugins: [],
}