from django.db import models
from django.contrib.auth.models import User
# Create your models here.
class Bill(models.Model):
    user=models.OneToOneField(User,on_delete=models.CASCADE)
    email=models.EmailField()
class Details(models.Model):
	Bill_number = models.TextField()
	date_d = models.DateField()
	Category= models.TextField()
	Company= models.TextField()
	Spent= models.FloatField()
	
"""class Signup(models.Model):
    username= models.CharField(max_length=100)
    password= models.CharField(max_length=30)
    phone= models.IntegerField()
    domain= models.TextField()
    def _str_(self):
        return self.username"""