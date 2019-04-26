from django import forms
from bill.models import Bill
from django.contrib.auth.models import User
from bill.models import Details
class UserForm(forms.ModelForm):
	password=forms.CharField(widget=forms.PasswordInput())
	class Meta():
		model = User
		fields = ('username','password')
		
class BillForm(forms.ModelForm):
    class Meta():
        model=Bill
        fields=('user','email')
		
class DetailsForm(forms.ModelForm):
	class Meta():
		model=Details
		fields=('Bill_number','date_d','Category','Company','Spent')