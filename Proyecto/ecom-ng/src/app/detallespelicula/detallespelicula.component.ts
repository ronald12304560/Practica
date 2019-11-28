import { Component, OnInit } from '@angular/core';

import { ActivatedRoute } from '@angular/router';
import { OfertaLaboralService } from '../services/oferta-laboral.service';

@Component({
  selector: 'app-detallespelicula',
  templateUrl: './detallespelicula.component.html',
  styleUrls: ['./detallespelicula.component.css']
})
export class DetallespeliculaComponent implements OnInit {

  list;
  constructor(
    private route: ActivatedRoute,
    private OfertaLaboralService: OfertaLaboralService,
  ) {
    this.getList();
  }
  ngOnInit() {
    this.getList();
  }
  private getList() {
    this.OfertaLaboralService.getList().subscribe(response => {
      this.list=response;
    });
  }
  delete(id) {
    console.log("delete:"+id);
    this.OfertaLaboralService.delete(id).subscribe(response => {
      console.log("de = " + JSON.stringify(response));
      this.getList();
    });
  }
}
