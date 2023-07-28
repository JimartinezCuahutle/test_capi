import { Component, OnInit } from '@angular/core';
import { UserServiceService } from '../user-service.service';


@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.css']
})
export class UsersComponent implements OnInit {
  usuarios: any[] = [];
  constructor(private userService: UserServiceService) { }

  ngOnInit(): void {
    this.userService.getUsuarios().subscribe(
      (data) => {
        this.usuarios = data;
      },
      (error) => {
        console.error(error);
      }
    );
  }

}
