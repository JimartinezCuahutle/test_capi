import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class UserServiceService {

  constructor(private http: HttpClient) { }

  getUsuarios() {
    return this.http.get<any[]>('http://localhost/testJavier/test_capi/capi_examen_back_javier/public/api/users-with-domicilios');
  }

}
