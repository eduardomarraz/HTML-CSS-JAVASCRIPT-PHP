@echo off
cd /d C:/Users/CursosTardes/Documents/Curso_tardes_NET/HTML-CSS-JAVASCRIPT-Projects

:: Habilitar variables con retardo para poder usar set /a
setlocal enabledelayedexpansion

:: Comprobar si commit_count.txt existe, si no, crearlo con el valor 1
if not exist commit_count.txt (
    echo 1 > commit_count.txt
)

:: Leer el número actual del commit y aumentarlo en 1
for /f "tokens=*" %%i in (commit_count.txt) do set /a commit_number=%%i+1

:: Ejecutar comandos de Git
C:/Users/CursosTardes/Downloads/PortableGit/bin/git.exe add --all
C:/Users/CursosTardes/Downloads/PortableGit/bin/git.exe commit -m "commit !commit_number!"
C:/Users/CursosTardes/Downloads/PortableGit/bin/git.exe push

:: Guardar el nuevo número de commit en commit_count.txt
echo !commit_number! > commit_count.txt
