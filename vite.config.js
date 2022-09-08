import {defineConfig} from 'vite'
import laravel from 'laravel-vite-plugin'
import * as path from 'path'
import * as os from 'os'
import * as fs from 'fs'
import livewire from '@defstudio/vite-livewire-plugin'

let homeDir = os.homedir()
let server = {}
let host = 'espacoclimbers.test'

if (homeDir) {
  server = {
    https: {
      key: fs.readFileSync(
        path.resolve(homeDir, `.config/valet/Certificates/${host}.key`)
      ),
      cert: fs.readFileSync(
        path.resolve(homeDir, `.config/valet/Certificates/${host}.crt`)
      )
    },
    hmr: {
      host
    },
    host
  }
}

export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/scss/control/app.scss',
        'resources/scss/web/app.scss',
        'resources/js/control/app.js',
        'resources/js/web/app.js',
        'resources/js/app.js'
      ],
      refresh: false
    }),
    livewire({
      refresh: ['resources/scss/web/app.scss', 'resources/js/control/app.js']
    })
  ],
  resolve: {
    alias: {
      '@bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
      '@fontsource/montserrat': path.resolve(
        __dirname,
        'node_modules/@fontsource/montserrat'
      )
    }
  },
  server
})
