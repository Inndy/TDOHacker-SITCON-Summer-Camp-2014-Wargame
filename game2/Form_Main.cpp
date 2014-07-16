//---------------------------------------------------------------------------

#include <fmx.h>
#include <stdlib.h>
#pragma hdrstop

#include "Form_Main.h"
//---------------------------------------------------------------------------
#pragma package(smart_init)
#pragma resource "*.fmx"
TFormMain *FormMain;
int ScoreA = 0, ScoreB = 0;
//---------------------------------------------------------------------------
__fastcall TFormMain::TFormMain(TComponent* Owner)
	: TForm(Owner)
{
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Attack(AttackType type)
{
	AttackType rnd = (rand() >> 2) % 3;
	String StrType[] = { L"¥¬", L"°Å¤M", L"¥ÛÀY" };
	Label2->Text = StrType[rnd];

	if (rnd == type)
	{
		ScoreA += 1;
		ScoreB += 1;
	}
	else if (rnd == (type + 2) % 3)
	{
		ScoreA += 1;
	}
	else
	{
		ScoreB += 1;
    }
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::SwitchButtonState(bool state)
{
	Button1->Enabled = state;
	Button2->Enabled = state;
	Button3->Enabled = state;
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Button4Click(TObject *Sender)
{
	this->SwitchButtonState(true);
	ScoreA = ScoreB = 0;
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Timer1Timer(TObject *Sender)
{
	Label1->Text = new String()->sprintf(L"%d - %d", ScoreA, ScoreB);
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Button1Click(TObject *Sender)
{
	this->Attack(AttackScissor);
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Button2Click(TObject *Sender)
{
	this->Attack(AttackStone);
}
//---------------------------------------------------------------------------
void __fastcall TFormMain::Button3Click(TObject *Sender)
{
	this->Attack(AttackPaper);
}
//---------------------------------------------------------------------------
