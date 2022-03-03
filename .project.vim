autocmd FileType php nnoremap <buffer> <leader>T <esc>:call RunTestFile()<cr>
autocmd FileType php nnoremap <buffer> <leader>t <esc>:call RunTestFileFilteredByLine()<cr>
autocmd FileType php nnoremap <buffer> <leader>at <esc>:call RunAllTests()<cr>

function! RunTestFileFilteredByLine()
  let command = "run_test " . expand('%') . " --line=" . line(".")
  call ClearEchoAndExecute(command)
endfunction

function! RunTestFile()
  let command = "run_test " . expand('%')
  call ClearEchoAndExecute(command)
endfunction

function! RunAllTests()
  let command = "run_test " . expand('%') . " --all"
  call ClearEchoAndExecute(command)
endfunction
