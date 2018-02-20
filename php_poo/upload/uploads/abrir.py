# -*- coding: utf-8 -*-
import subprocess


def sublime():
	caminho_programa = r'/opt/sublime_text/sublime_text'
        subprocess.Popen("{}".format(caminho_programa))
def chrome():
	caminho_programa = r'/usr/bin/google-chrome-stable'
        subprocess.Popen("{}".format(caminho_programa))

def abrir():
	sublime()
	chrome()
	htdocs()
abrir()
