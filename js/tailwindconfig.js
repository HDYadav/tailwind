tailwind.config = {
    theme: {
      extend: {
          colors: {
              '1D5D9B':'#1D5D9B',
              '57B5F4':'#57B5F4',
              '4E535769':'#4E535769',
              '1D4469': '#1D4469',
              'E5ECF0': '#E5ECF0',
              'EFEFEF': '#EFEFEF',
              'F16136': '#F16136',
              'BFBFBF': '#BFBFBF',
              'F4F4F4': '#F4F4F4',
              'DCDCDC': '#DCDCDC',
              'E6EFF3': '#E6EFF3',
              'E6ECF1': '#E6ECF1',
              '535252': '#535252',
              'CCE6FF':'#CCE6FF',
              'B9B9B9':'#B9B9B9',
              'F1F6F9':'#F1F6F9',
              'White':'#FFFFFF',
              '2C495D': '#2C495D',
              'C8D3DC': '#C8D3DC',
              'BECBD3': '#BECBD3',
              'D2DAE1': '#D2DAE1',
              '1D3545': '#1D3545',
              'A2B3C3': '#A2B3C3',
              'E8ECF0': '#E8ECF0',
              '555F65' :'#555F65',
              '203C50': '#203C50',
              '2999BC' : '#2999BC',
              'DFE2E5': '#DFE2E5',
              '434852': '#434852',
              'e7e7e7': '#e7e7e7',
              '20486F': '#20486F',
              'F1F5F8': '#F1F5F8',
              '454545': '#454545',
              '383838': '#383838',
              'eeeeee': '#eeeeee',
              'EDF3F7': '#EDF3F7',
              'CFCFCF': '#CFCFCF',
              '288FB2': '#288FB2',
             
          },
          textColor: {
            'CCE6FF': '#CCE6FF',
            '6C94A1': '#6C94A1'
          },
    
          fontFamily:{
            'poppins': ['Poppins'],
            'Vietnam': ['Be Vietnam'],
            'nunito': ['nunito']
            
          },
          fontSize: {
            '12': '12px',
            '14': '14px',
            '16': '16px',
            '20': '20px',
            '32': '32px',
          },
          fontWeight: {
            '200': 200,
            '300': 300,
            '400': 400,
            '500': 500,
            '600': 600,
            '700': 700,
            '800': 800,
            
          },
          fontStyle: {
            'italic': 'italic',
            'not-italic': 'normal'
          },
          width:{
            '14per': '14%',
            '86per': '86%'
          },
          boxShadow: {
              '1'  : '0px 0px 73.2px 0px #E0EAF0'
          },
          lineHeight: {
            'normal': 'normal',
          },
          textTransform: {
            'capitalize': 'capitalize',
          },
      },
          screens: {
          'ssm':'360px',
          'sm': '640px',
          // => @media (min-width: 640px) { ... }
          
          'md': '768px',
          // => @media (min-width: 768px) { ... }
          
          'lg': '1024px',
          // => @media (min-width: 1024px) { ... }
          
          'xl': '1280px',
          // => @media (min-width: 1280px) { ... }
          
          '2xl': '1536px',
          // => @media (min-width: 1536px) { ... }
          },
    }
  }