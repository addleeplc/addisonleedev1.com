/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./wp-content/themes/**/**/*.{php,js}"],
    prefix: 'mk-',
    theme: {
        fontFamily: {
            'steagal': ['Steagal']
        },
        extend: {
            screens: {
                'x-lg': '1088px',
                'xl-lg': '1250px',
                'xxl-lg': '1375px',
                'xxxl-lg': '1600px',
                'sm-max-xs': '400px',
                'sm-max' : {'max': '767px'},
                'sm-max-md' : {'max': '1000px'}                  
            },
            maxWidth: {
                'site-half': '37.5rem', // 600px
                'site-xs': '49.625rem', // 794px
                'site-sm': '51.625rem', // 826px
                'site-ssm': '52.5rem', // 840px
                'site-1sm': '62.375rem', // 998px
                'site-md' : '64.375rem', // 1030px
                'site': '75rem', // 1200px
                'site-lg': '82.875rem', // 1326px
                'image': '30.688rem', // 491px
                'image-sm': '19.438rem' // 311px
            },
            width: {
                'image': '30.688rem' // 491px
            },
            minHeight: {
                'image-blog': '30.938rem'
            },
            height: {
                'image': '32.688rem',
                'image-sm': '18.75rem',
                'image-1sm': '22.188rem',
                'image-md': '25rem', // 400px
                'image-1md': '29rem', // 464px
                'image-lg': '34rem', // 544px
                'image-xl': '41.188rem', // 659px
                'screen-header': 'calc(100vh - 109px)',
                '536': '33.5rem',
                'image-blog': '30.938rem'
            },
            fontSize: {
                // 'xxs': '10px',
                // 'xs': '12px',
                '2.5xl': '28px',
                '3.5xl': '32px',
                '4.5xl': '40px',
                'card-title': ['1.4rem', {
                    lineHeight: '1.2'
                }],
                'xxxxxxs-title': ['0.625rem', { // 10px
                    lineHeight: '0.8rem',
                    letterSpacing: '0.063rem'
                }],
                'xxxxxs-title': ['0.75rem', { // 12px
                    lineHeight: '1rem',
                    letterSpacing: '0.075rem'
                }],
                'xxxxs-title': ['0.875rem', { // 14px
                    lineHeight: '1rem',
                    letterSpacing: '0.088rem'
                }],
                'xxxs-title': ['1rem', { // 16px
                    lineHeight: '1.375rem',
                    letterSpacing: '0.1rem'
                }],
                'xxs-title': ['1.125rem', {// 18px
                    lineHeight: '1.5rem',
                    letterSpacing: '0.113rem'
                }],
                'xs-title': ['1.25rem', { // 20px
                    lineHeight: '1.375rem',
                    letterSpacing: '0.125rem'
                }],
                'sm-title': ['1.5rem', { // 24px
                    lineHeight: '2rem',
                    letterSpacing: '0.15rem'
                }],
                '1sm-title': ['1.75rem', { // 28px
                    lineHeight: '1.875rem',
                    letterSpacing: '0.175rem'
                }],
                '2sm-title': ['2rem', { // 32px
                    lineHeight: '2.25rem',
                    letterSpacing: '0.2rem'
                }],
                'md-title': ['2.25rem', { // 36px
                    lineHeight: '2.625rem',
                    letterSpacing: '0.25rem'
                }],
                '1md-title': ['2.5rem', { // 40px
                    lineHeight: '2.625rem',
                    letterSpacing: '0.25rem'
                }],
                '2md-title': ['2.875rem', { // 46px
                    lineHeight: '3rem',
                    letterSpacing: '0.288rem'
                }],
                'lg-title': ['3rem', { // 48px
                    lineHeight: '3.125rem',
                    letterSpacing: '0.3rem'
                }],
                'xl-title': ['3.5rem', { // 56px
                    lineHeight: '3.625rem',
                    letterSpacing: '0.35rem'
                }],
                '2xl-title': ['5rem', { // 80px
                    lineHeight: '5.063rem',
                    letterSpacing: '0.5rem'
                }],
                '3xl-title': ['5.5rem', { // 88px
                    lineHeight: '5.188rem',
                    letterSpacing: '0.55rem'
                }],
            },
            colors: {
                'yellow': '#FFD900',
                'dark-yellow': '#CBAD01',
                'secondary-grey': '#858687',
                'third-grey': '#F1F1F1',
                'text-grey': '#000000a3',
                'slate-grey': 'rgba(255,255,255,0.08)',
                'slate-light-grey': 'rgba(255,255,255,0.7)',
                'midnight': '#141414',
                'pink': '#FF0080',
                'prism-grey': '#7C7E81',
                'green': '#00FF80',
                'purple': '#7D00FF',
                'blue': '#00D9FF'
            },
            lineHeight: {
                'heading': '1.1',
                'h3': '1.688rem'
            },
            letterSpacing: {
                'space': '0.088rem',
            },
            transitionTimingFunction: {
                'bezier': 'cubic-bezier(0.4, 0, 0.2, 1)',
            },
            backgroundImage: {
                'hero-gradient': "linear-gradient(180deg, rgba(0, 0, 0, 0.00) 72.83%, #000 100%), linear-gradient(270deg, rgba(0, 0, 0, 0.00) 40.8%, rgba(0, 0, 0, 0.30) 62.67%, rgba(0, 0, 0, 0.60) 100%)",
                'hero-gradient-mob': "linear-gradient(0deg, rgba(0, 0, 0, 0.00) 75.94%, #000 100%), linear-gradient(180deg, rgba(0, 0, 0, 0.00) 47.34%, #000 100%), linear-gradient(270deg, rgba(0, 0, 0, 0.00) 40.8%, rgba(0, 0, 0, 0.30) 62.67%, rgba(0, 0, 0, 0.60) 100%)",
                'hero-gradient-video': "linear-gradient(0deg, rgba(0, 0, 0, 0.00) 75.94%, #000 100%), linear-gradient(180deg, rgba(0, 0, 0, 0.00) 72.83%, #000 100%), linear-gradient(270deg, rgba(0, 0, 0, 0.00) 40.8%, rgba(0, 0, 0, 0.30) 62.67%, rgba(0, 0, 0, 0.60) 100%)",
                'full-image': "linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), linear-gradient(270deg, rgba(0, 0, 0, 0.00) 25.03%, rgba(0, 0, 0, 0.80) 100%, rgba(0, 0, 0, 0.71) 100%)",
                'full-image-alternate': "linear-gradient(180deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.5) 15%, rgba(0,0,0,0) 33%, rgba(0,0,0,0) 66%, rgba(0,0,0,0.5) 85%, rgba(0,0,0,1) 100%), linear-gradient(135deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%)"
            },          
            padding: {
                '18': '4.5rem', // 72px
            },
            opacity: {
                '64': '0.64'
            },     
            typography: {
                DEFAULT: {
                  css: {
                    p: {
                      'margin-top': '.8em',
                      'margin-bottom': '.8em'
                    },
                    ul: {
                        'margin-top': '.8em',
                        'margin-bottom': '.8em'
                    }
                  }
                }
            }
        }
    },
    
    plugins: [require('@tailwindcss/typography')]
}